<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAccess
{
    public function handle(Request $request, Closure $next, $accessType = 'auth'): Response
    {
        if ($accessType === 'guest') {

            if (Auth::check()) {
                return redirect()->route('admin.dashboard');
            }
        } elseif ($accessType === 'auth') {

            if (!Auth::check()) {
                return redirect()->route('admin.login');
            }

        }

        return $next($request);
    }
}
