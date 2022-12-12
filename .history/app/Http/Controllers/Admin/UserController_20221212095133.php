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
        $rules = [
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ];
        $messages = [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Phải nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where('email', $request->email)->first();
        $password = $request->password;
        if (Hash::check($password, $user->password))
            dd('ok');
        else
            dd('error');
        return redirect()->route('admin.users');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users');
    }
}
