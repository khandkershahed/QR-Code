<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.' . $request->route()->getName());
        } elseif (Auth::guard('web')->check()) {
            return redirect()->route('user.' . $request->route()->getName());
        }

        return redirect()->route('homePage')->with('error','You do not have the permission to proceed.'); // or any other appropriate action for unauthenticated users
    }
}
