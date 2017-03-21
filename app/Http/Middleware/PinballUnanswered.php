<?php

namespace App\Http\Middleware;

use Closure;
use App\Player;

class PinballUnanswered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if($this->_isAnswered($request)){
        return redirect()->action('GameController@alreadyAnswered', ['id' => $request->id]);
      }else{
        return $next($request);
      }
    }

    private function _isAnswered($request)
    {
      $player = $this->getPlayer($request);
      $latestGame = $player->getIncompleteGame();
      return $latestGame->getAnsweredPinballIds()->contains($request->id);
    }

    private function getPlayer(\Illuminate\Http\Request $request)
    {
      $email = $request->session()->get('email', NULL);
      if(is_null($email)){
        return null;
      }
      return Player::where('email', $email)->first();
    }
}
