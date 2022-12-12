<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function add(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ];
        $messages = [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Phải nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
    }
}
