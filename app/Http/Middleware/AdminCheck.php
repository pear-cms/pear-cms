<?php

namespace App\Http\Middleware;

use Closure;
Use Helpers;
use Auth;

class AdminCheck
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
         if ( !Helpers::checkIfAdmin() )
         {
           return redirect('/');
         }
       } else {
         return redirect('/');
       }
         return $next($request);
     }
 }
