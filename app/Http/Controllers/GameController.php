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
      $this->_getIncompleteGameOrCreateNew($player);
      return view('partials.game.game_info', [
        'action' => 'start',
        'uitstoot' => $player->getEmmission(),
        'id' => $player->getNextPinballId()
      ]);
    }

    private function _getIncompleteGameOrCreateNew($player)
    {
      $game = $player->getIncompleteGame();
      if(is_null($game)){
        $game = new Game();
        $game->player_id = $player->id;
        $game->save();
      }
    }

    public function end(Request $request)
    {
      $player = $this->getPlayer($request);
      $latestGame = $this->_getLatestGame($player);
      if($latestGame->hasAnsweredAllPinballs() && !$latestGame->isFinished()){
        $latestGame->game_end = new \DateTime();
        $latestGame->save();
        return view('partials.game.game_end', [
          'rank' => $latestGame->getRank(),
          'backgroundImage' => 'drought.jpg',
          'uitstoot' => $latestGame->getEmmission(),
        ]);
      }else{
        return redirect('start');
      }
    }

    private function _getLatestGame($player)
    {
      $latestGame = $player->getIncompleteGame();
      if(is_null($latestGame)){
        $latestGame = Game::where('player_id',$player->id)->orderBy('game_end', 'desc')->first();
      }
      return $latestGame;
    }

    public function scoreboard()
    {
      return view('partials.public.scoreboard', ['games' => Game::getScoreboard()]);
    }

    public function alreadyAnswered(Request $request)
    {
      $player = $this->getPlayer($request);
      return view('partials.game.already_answered', [
        'pinball' => \App\Pinball::find($request->id),
        'end' => (is_null($player->getIncompleteGame())),
        'next' => (is_null($player->getIncompleteGame()))? 'start': ('pinball/'.$player->getNextPinballId()),
        'backgroundImage' => 'drought.jpg',
      ]);
    }
}
