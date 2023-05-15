<?php

namespace App\Http\Middleware;

use Closure;

class CekLevel
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
        if (in_array($request->user()->level, ['admin', 'kaprodi', 'guru', 'siswa'])) {
            return $next($request);
        }

        return redirect('/absen'); // Ganti '/path' dengan path yang sesuai dengan tujuan redirect
    }
}
