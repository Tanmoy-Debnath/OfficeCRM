<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Stuff;

class ReceptionistMiddleware
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
        if( $staff = Stuff::where('user_name', $request->user_name)){
            return $next($request);
        } else {
            return redirect('receptionist/login-form');
        }

    }


}
