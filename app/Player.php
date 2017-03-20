<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CasinoSetting;
use App\Pinball;

class Player extends Model
{
    public $timestamps = false;
    protected $fillable = ['email'];

    public function playerAlias()
    {
      return $this->belongsTo('App\PlayerAlias', 'player_alias_id');
    }

    public function games(){
      return $this->hasMany('App\Game');
    }

    public function playerAnswers()
    {
      return $this->hasMany('App\PlayerAnswer');
    }

    /**
    * Calculates the current emmission of the player
    * @return The current emmission
    */
    public function getEmmission()
    {
      $emmission = intval((CasinoSetting::where('name', 'seed_money')->first())->setting);
      $latestGame = $this->getIncompleteGame();
      if(! is_null($latestGame)){
        $emmission = $latestGame->getEmmission();
      }
      return $emmission;
    }

    /**
    * Get the incomplete game of the player
    * @return The incomplete game or null if not yet played
    */
    public function getIncompleteGame()
    {
      return $this->games()->whereNull('game_end')->first();
    }

    /**
    * Generates a random next pinball id
    * @return pinball id
    */
    public function getNextPinballId()
    {
      $pinballId = 1;
      $latestGame = $this->getIncompleteGame();
      if(is_null($latestGame)){//not yet played
        $pinballId = Pinball::all()->get()->random()->id;
      }else{
          $answeredPinballIds = $this->_getAnsweredPinballIds();
          $pinballId = Pinball::whereNotIn('id', $answeredPinballIds)->pluck('id')->random();
      }
      return intval($pinballId);
    }

    private function _getAnsweredPinballIds(){
      $latestGame = $this->getIncompleteGame();
      return $latestGame->getAnsweredPinballIds();
    }

    public function getNextQuestion(int $pinballId)
    {
      $latestGame = $this->getIncompleteGame();
      $question = Question::whereNotIn('id', $latestGame->playerAnswers()->select('question_id')->get()->toArray())
        ->where('pinball_id', $pinballId)
        ->get()
        ->random();
      return $question;
    }
}
