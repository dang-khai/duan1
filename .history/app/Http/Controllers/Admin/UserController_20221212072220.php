<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'sdt' => 'required',
            'address' => 'required',
        ];
        $messages = [
            'name.required' => 'Phải nhập họ tên',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email không đúng định dạng',
            'sdt.required' => 'Phải nhập số điện thoại',
            'address.required' => 'Phải nhập địa chỉ',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
    }
}
