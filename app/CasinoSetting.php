<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasinoSetting extends Model
{
    public $timestamps = false;
    protected $table = 'casino_settings';
    protected $fillable = ['name', 'setting'];
}
