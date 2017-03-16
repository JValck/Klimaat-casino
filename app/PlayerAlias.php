<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerAlias extends Model
{
  public $timestamps = false;
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'player_aliases';

  public function players()
  {
    return $this->hasMany('App\Player');
  }
}
