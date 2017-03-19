<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PlayerAlias;
use App\Player;
use DB;

class LoginController extends Controller
{
  public function index()
  {
    return view('partials.public.login', ['action' => 'login', 'aliases' => $this->_getPlayerAliases()]);
  }

  public function validateLogin(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|min:8|unique:players,email',
      'email-confirmed' => 'required|email|same:email',
      'alias' => 'required|numeric',
    ]);
    $this->_logIn($request->input('email'), intval($request->input('alias')), $request);
    return redirect('start');
  }

  private function _getPlayerAliases()
  {
    return PlayerAlias::all();
  }

  private function _logIn($emailaddress, $alias_id, $request)
  {
    DB::transaction(function() use($emailaddress, $alias_id, $request){
      $this->_saveToDb($emailaddress, $alias_id);
      $request->session()->put('email', $emailaddress);
      $request->session()->put('isLoggedIn', true);
    });
  }

  private function _saveToDb($emailaddress, $alias_id)
  {
    $player = Player::firstOrNew(['email' => $emailaddress]);
    $player->player_alias_id = $alias_id;
    $player->save();
  }
}
