<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function ShowFormRegister()
    {
        return view('users.pages.register');
    }
    public function PostRegister(RegisterRequest $request)
    {
        $request->validate();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => '1'
        ]);
        return redirect()->route('user_home');
    }
}
