<?php

namespace App\Http\Middleware;

use Closure;
Use Helpers;
use Auth;

class SiteMaintenance
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
        if (env('SITE_MAINTENANCE') == TRUE)
        {
          return redirect('/');
        }
        return $next($request);
    }
}
