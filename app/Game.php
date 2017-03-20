<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CasinoSetting;

class Game extends Model
{
  public $timestamps = false;

  public function player()
  {
    return $this->belongsTo('App\Player');
  }

  public function playerAnswers()
  {
    return $this->hasMany('App\PlayerAnswer');
  }

  public function getEmmission()
  {
    $emmission = intval((CasinoSetting::where('name', 'seed_money')->first())->setting);
    $sumCorrectAnswers = $this->playerAnswers()->where('correct', true)->sum('bet');
    $emmission -= $sumCorrectAnswers;
    return $emmission;
  }

  public function isFinished()
  {
    return !is_null($this->game_end);
  }

  public function getRank()
  {
    $scoreboard = Game::getScoreboard()->toArray();
    $rank = 1;
    foreach ($scoreboard as $index => $game) {
      if($game['id'] == $this->id){
        break;
      }
      $rank++;
    }
    return $rank;
  }

  public static function getScoreboard()
  {
    $collection = collect();
    foreach (Game::whereNotNull('game_end')->get() as $game) {
      $game->emmission = $game->getEmmission();
      $collection->push($game);
    }
    return $collection->sortBy('emmission');
  }

  /**
  * Checks if the user has answered all pinballs in the current game
  * @return true if all answered
  */
  public function hasAnsweredAllPinballs()
  {
    $answeredPinballIds = $this->getAnsweredPinballIds();
    $difference = Pinball::pluck('id')->diff($answeredPinballIds);
    return $difference->count() == 0;
  }

  public function getAnsweredPinballIds()
  {
    return $this->playerAnswers()
      ->join('questions', 'question_id', '=', 'questions.id')
      ->select('pinball_id')->distinct()->pluck('pinball_id');
  }
}
