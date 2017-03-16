<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;

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
}
