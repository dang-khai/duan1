<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // kiểm tra xem đăng nhập chưa
        if (Auth::check()) {
            // Admin -> role = 1
            //user -> role = 0
            if (Auth::user()->role == '1' && Auth::user()-) {
                return $next($request);
            } else {
                return redirect('/'); // Không phải admin -> trang home
            }
        } else {
            return redirect('/login'); // chưa đăng nhập -> login
        }
        return $next($request);
    }
}
