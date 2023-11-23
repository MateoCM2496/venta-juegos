<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserIsOne
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y tiene ID igual a 1
        if (Auth::check() && Auth::user()->id == 1) {
            return $next($request);
        }
        
        return redirect('/');
    }
}
