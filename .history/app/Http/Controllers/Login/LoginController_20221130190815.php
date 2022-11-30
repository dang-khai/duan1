<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ShowFormLogin()
    {
        return view('users.pages.login');
    }
    public function PostLogin(LoginRequest $request)
    {
    }
}
