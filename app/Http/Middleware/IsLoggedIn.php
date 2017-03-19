<?php

namespace App\Http\Middleware;

use Closure;

class IsLoggedIn
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
      if($request->session()->has('email') && $request->session()->get('isLoggedIn', false)){
        $response = $next($request);
      }else{
        $response = redirect('login');
      }
      return $response;
    }
}
