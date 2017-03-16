<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question_text', 'pinball_id'];

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
