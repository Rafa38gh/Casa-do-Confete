<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OpsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    /* Verifica se o usuário está em uma conta operacional */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 3)
        {
            return $next($request);
        }

        return redirect()->route('web.index')->with('error', 'Você não possui acesso de conta operacional');
    }
}
