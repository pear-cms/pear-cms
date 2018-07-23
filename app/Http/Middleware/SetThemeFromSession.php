<?php

namespace App\Http\Middleware;

use Closure;

class SetThemeFromSession
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
      if(session()->has('theme-name'))
      {
        \Theme::set(session('theme-name'));
      } 
        return $next($request);
    }
}
