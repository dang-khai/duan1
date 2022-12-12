<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $password = decrypt($users->password);
        $stt = 1;
        return view('admin.pages.users', compact('users', 'stt', 'password'));
    }

    public function add(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('admin.users');
    }
    public function edit(UserRequest $request)
    {
        $input = $request->all();
        $user = User::where('id', $request->id)->update($input);
        dd($user);
        return redirect()->route('admin.users');
    }
}
