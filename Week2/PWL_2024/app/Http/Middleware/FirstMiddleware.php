<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    if ($request->query('akses') !== 'izin'){
        return response('Akses ditolak oleh FirstMiddleware. Tambahkan ?akses=izin di URL.', 403); 
    }
        return $next($request);
    }
}
