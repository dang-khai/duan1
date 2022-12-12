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
        dd($users->get('password'));
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
    public function edit(Request $request)
    {
        $user = User::find($request->id);
        $email = $user->email;
        if ($email == $request->email) {
            $arr = [
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ];
        } else {
            $arr = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ];
        }
        dd($arr);
        // $input = $request->all();
        // $user = User::where('id', $request->id)->update($input);
        return redirect()->route('admin.users');
    }
}
