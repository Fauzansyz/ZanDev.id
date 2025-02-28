<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Tambahkan header CORS secara manual
        $response->headers->set('Access-Control-Allow-Origin', '*'); // Bisa diganti domain spesifik
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        // Jika request OPTIONS, langsung kirim response tanpa lanjut ke controller
        if ($request->isMethod('OPTIONS')) {
            return response()->json('OK', 200, $response->headers->all());
        }

        return $response;
    }
}