<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinball extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'quote'];

    public function questions()
    {
      return $this->hasMany('App\Question');
    }
}
