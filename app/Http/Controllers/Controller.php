<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Player;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getPlayer(\Illuminate\Http\Request $request)
    {
      $email = $request->session()->get('email', NULL);
      if(is_null($email)){
        return null;
      }
      return Player::where('email', $email)->first();
    }
}
