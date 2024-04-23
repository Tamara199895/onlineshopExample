<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;
use App\UserModel;

class admin

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
  public function handle($request, Closure $next)
    {   $user=UserModel::where("id",Session::get("id"))->first();
     
        if ($user->type=='admin') {
        return $next($request);
        }
    else{
        return Redirect::to("/shoper");
        
    }
    }
}
