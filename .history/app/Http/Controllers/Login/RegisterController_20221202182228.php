<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function ShowFormRegister()
    {
        return view('users.pages.register');
    }
    public function PostRegister(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $this->guard()->;
        return redirect()->route('user_home');
    }
    protected function guard()
    {
        return Auth::guard();
    }

    public function login($user)
    {
        Auth::login($user);
    }
}
