<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    public function pinball()
    {
      return $this->belongsTo('App\Pinball');
    }

    public function answers()
    {
      return $this->hasMany('App\Answer');
    }

    public function playerAnswers()
    {
      return $this->hasMany('App\PlayerAnswer');
    }
}
