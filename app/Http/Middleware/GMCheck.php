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
           if ( env('ERROR_LOGGING') == true )
           {
             Helpers::saveErrorLog('Access denied @ ' . $request->fullUrl());
           }
           return redirect('/');
         }
       } else {
         return redirect('/');
       }
         return $next($request);
     }
 }
