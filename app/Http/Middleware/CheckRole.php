<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $user = auth()->user();

        if (!$user->isAdmin() && !$user->isGuru() && !$user->isKaprodi() && !$user->isSiswa()) {
            return redirect('/login');
        }
            
            return $next($request);
        
        if (!$user->{"is{$level}"}()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
