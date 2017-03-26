<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CasinoSetting;
use App\Pinball;

class BetController extends Controller
{
    public function index(Request $request)
    {
      return view('partials.game.bet', [
        'action' => $request->url(),
        'minBet' => CasinoSetting::where('name', 'min_bet')->first()->setting,
        'maxBet' => CasinoSetting::where('name', 'max_bet')->first()->setting,
        'pinball' => Pinball::find($request->session()->get('pinballId')),
      ]);
    }

    public function bet(Request $request)
    {
      $this->validate($request, [
        'bet' => 'required|numeric',
      ]);
      $request->session()->put('bet', intval($request->input('bet')));
      $pinballId = $request->session()->get('pinballId');
      return redirect()->action('PinballController@index', ['id' => $pinballId]);
    }
}
