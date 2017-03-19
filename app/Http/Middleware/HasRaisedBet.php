<?php

namespace App\Http\Middleware;

use Closure;

class HasRaisedBet
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
      if($request->session()->has('bet')){
        return $next($request);
      }
      $request->session()->put('pinballId', $request->id);
      return redirect('bet');
    }
}
