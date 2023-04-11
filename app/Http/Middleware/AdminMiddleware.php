<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        $userRoles = explode(',', $request->user()->roles);
        if(in_array('admin', $userRoles)) {
            return view('admin.index');
        } else {
            return $next($request);
        }
    }
}
