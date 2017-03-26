<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PlayerAlias;

class PlayerAliasController extends Controller
{
    public function ajaxAliasInfo($id)
    {
      return PlayerAlias::find($id);
    }
}
