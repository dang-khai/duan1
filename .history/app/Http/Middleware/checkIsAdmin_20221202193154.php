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
            // nếu role là 0 (admin) đi tiếp
            if (Auth::user()->role == '1') {
                return $next($request);
            } else {
                return redirect()->route('user_home');
            }
        } else
            return redirect('/login'); // chưa đăng nhập -> login
    }
}
