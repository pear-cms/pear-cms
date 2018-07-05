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
        if ( Helpers::getSiteMaintenanceStatus() && !Helpers::checkIfGM() )
        {
          return redirect('/');
        }
        return $next($request);
    }
}
