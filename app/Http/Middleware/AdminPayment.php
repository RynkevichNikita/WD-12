<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (isset($request->role)) {
            switch ($request->role) {
                case 'admin':
                    return redirect()->route('admin');
                case 'user':
                    return redirect()->route('user');
            }
        }
        return $next($request);
    }
}
