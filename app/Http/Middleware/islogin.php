<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;
class islogin
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
        if (Session::has("id")) {
        return $next($request);
        }
    else{
        return Redirect::to("/login")->with("message","Please login first");
        
    }
    }
}
