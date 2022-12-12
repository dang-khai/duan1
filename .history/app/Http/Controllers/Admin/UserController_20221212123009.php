<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $request->validate(['email' => 'unique:users,email'], [
            'email.unique' => 'Email đã tồn tại',
        ]);
        $validated = $request->validated();
        if ($validated) {
            dd('hello, you are');
        } else {
            dd(!$validated);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('admin.users')->with('toast_success', 'Thêm tài khoản thành công');
    }
    public function edit(UserRequest $request)
    {
        $request->validate(['email' => 'unique:users,email,' . $request->id], [
            'email.unique' => 'Email đã tồn tại',
        ]);
        if (Hash::needsRehash($request->password)) {
            $request->password = Hash::make($request->password);
        }
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect()->route('admin.users')->with('toast_success', 'Sửa tài khoản thành công');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')->with('toast_success', 'Xóa tài khoản thành công');
    }
}
