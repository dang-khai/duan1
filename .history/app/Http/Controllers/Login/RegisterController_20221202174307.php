<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function ShowFormRegister()
    {
        return view('users.pages.register');
    }
    public function PostRegister(RegisterRequest $request)
    {
        $request->validate();
        dd($request->all());
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // return redirect()->route('user_home');
    }
}
