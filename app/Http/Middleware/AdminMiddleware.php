<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     /* Verifica se o usuário é um administrador */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->is_admin == 1)
        {
            return $next($request);
        }
        
        return redirect()->route('web.index')->with('error', 'Você não possui acesso de administrador');
    }
}
