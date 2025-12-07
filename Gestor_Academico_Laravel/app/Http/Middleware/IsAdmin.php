<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado y es admin
        if ($request->user()?->role !== 'admin') {
            return response()->json(['message' => 'Acceso no autorizado porque no eres admin.'], 403);
        }
        
        return $next($request);
    }
}
