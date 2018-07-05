<?php

namespace App\Http\Middleware;

use Closure;
Use Helpers;
use Auth;

class GMCheck
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
       if (isset ( Auth::user()->username ))
       {
         if ( !Helpers::checkIfGM() )
         {
           return redirect('/');
         }
       } else {
         return redirect('/');
       }
         return $next($request);
     }
 }
