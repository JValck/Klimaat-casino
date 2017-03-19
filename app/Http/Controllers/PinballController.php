<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Pinball;

class PinballController extends Controller
{
    public function index(Request $request)
    {
      $pinball = Pinball::find($request->id);
      $question = ($this->getPlayer($request))->getNextQuestion($request->id);
      return view('partials.game.question', [
        'pinball' => $pinball,
        'question' => $question,
        'backgroundImage' => $this->_toImageName($pinball->name),
      ]);
    }

    private function _toImageName($name)
    {
      return str_ireplace(" ", "_", str_ireplace("?", "", $name));
    }
}
