<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ShowFormLogin()
    {
        return view('users.pages.login');
    }
    public function PostLogin(Request $request)
    {
    }
}
