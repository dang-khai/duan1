<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $stt = 1;
        return view('admin.pages.users', compact('users', 'stt'));
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
    public function edit(Request $request, User $user)
    {
        $user = User::find($request->id);
        dd($user);
        $email = $user->email;
        $arr = [
            'name' => $request->name,

            // 'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];
        // $input = $request->all();
        // $user = User::where('id', $request->id)->update($input);
        return redirect()->route('admin.users');
    }
}
