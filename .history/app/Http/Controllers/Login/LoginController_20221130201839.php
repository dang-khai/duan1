<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function ShowFormLogin()
    {
        return view('users.pages.login');
    }
    public function PostLogin(LoginRequest $request)
    {
        $validator = $request->validated();
        if ('ok') {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
        if (!$validator->isValid()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
