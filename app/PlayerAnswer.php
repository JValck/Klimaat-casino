<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerAnswer extends Model
{
    public $timestamps = false;
    protected $table = 'player_answers';

    public function game()
    {
      return $this->belongsTo('App\Game');
    }

    public function question()
    {
      return $this->belongsTo('App\Question');
    }

    public function player()
    {
      return $this->belongsTo('App\Player');
    }
}
