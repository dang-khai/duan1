<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowFormLogin()
    {
        return view('users.pages.login');
    }
    public function PostLogin(LoginRequest $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $request->validated();
        if (Auth::attempt($arr)) {
            return redirect()->intended('home');
        } else {
            return back()->withErrors('login_error' => ['Email hoặc mật khẩu không đúng']);
        }
    }
}
