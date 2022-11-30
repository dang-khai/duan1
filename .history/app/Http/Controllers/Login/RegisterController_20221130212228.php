<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function ShowFormRegister()
    {
        return view('users.pages.register');
    }
    public function PostRegister(RegisterRequest $request)
    {
        $request->validate();
    }
}
