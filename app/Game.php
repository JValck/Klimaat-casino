<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
