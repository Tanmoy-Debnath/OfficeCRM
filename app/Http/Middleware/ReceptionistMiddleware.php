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
        if(Session::get('receptionistName')::check()){
            return $next($request);
        } else {
            return redirect('receptionist/login-form');
        }

    }


}
