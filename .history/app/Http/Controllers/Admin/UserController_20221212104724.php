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
    public function edit(UserRequest $request)
    {
        if (Hash::needsRehash($request->password)) {
            $request->password = Hash::make($request->password);
        }
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect()->route('admin.users')->with('toast_success', 'Sửa thành công');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users');
    }
}
