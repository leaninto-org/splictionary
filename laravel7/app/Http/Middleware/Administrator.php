<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Administrator
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
        if(in_array(\Auth::user()->google_id, \Config::get('splictionary.admins') )){
            return $next($request);
        }else{
            abort(403);
        }
        
    }
}
