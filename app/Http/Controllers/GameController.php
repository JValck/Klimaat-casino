<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;
use App\Game;

class GameController extends Controller
{
    public function index(Request $request)
    {
      $player = $this->getPlayer($request);
      $this->_getLatestGame($player);
      return view('partials.game.game_info', [
        'action' => 'start',
        'uitstoot' => $player->getEmmission(),
        'id' => $player->getNextPinballId()
      ]);
    }

    private function _getLatestGame($player)
    {
      $game = $player->getIncompleteGame();
      if(is_null($game)){
        $game = new Game();
        $game->player_id = $player->id;
        $game->save();
      }
    }
}
