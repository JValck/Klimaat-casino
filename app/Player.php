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
        $correctBets = $latestGame->playerAnswers()->where('right', true)->get();
        foreach ($correctBets as $bet) {
          $emmission -= $bet->bet;
        }
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
        $pinballId = $this->_generateRandomPinballId();
      }else{
          $answeredQuestionIds = $latestGame->playerAnswers()->select('question_id')->get()->toArray();
          $unansweredPinballs = Question::whereNotIn('id', $answeredQuestionIds)->join('pinballs', 'pinballs.id', '<>', 'questions.id')->select('pinballs.id')->distinct()->get()->toArray();
          $pinballId = $this->_generateRandomPinballId($unansweredPinballs);
      }
      return $pinballId;
    }

    private function _generateRandomPinballId($pinballIds = NULL)
    {
      if(is_null($pinballIds)){
        $pinballIds = Pinball::select('id')->get()->toArray();
      }
      return intval($pinballIds[rand(0, sizeof($pinballIds)-1)]["id"]);
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
