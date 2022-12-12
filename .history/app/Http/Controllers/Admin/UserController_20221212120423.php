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
        $request->validate(['email' => 'required|string|email|unique:users,email'], [
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect()->route('admin.users')->with('toast_success', 'Thêm tài khoản thành công');
    }
    public function edit(Request $request)
    {
        $text = 'editError' . $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|unique:users,email,' . $request->id,
            'password' => ['required', 'string', 'min:6'],
        ], [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Phải nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('text', $text)
                ->withInput();
        }
        // $request->validate(['email' => 'required|string|email|unique:users,email,' . $request->id], [
        //     'email.required' => 'Phải nhập email',
        //     'email.email' => 'Email phải đúng định dạng',
        //     'email.unique' => 'Email đã tồn tại',
        // ]);
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
