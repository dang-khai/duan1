<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Orders;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Hàm return view trang quản lý tài khoản
    public function index()
    {
        $users = User::all();
        $stt = 1;
        return view('admin.pages.users', compact('users', 'stt'));
    }

    //Hàm thêm tài khoản
    public function add(UserRequest $request)
    {
        $request->validate(['email' => 'unique:users,email'], [
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

    //Hàm sửa tài khoản
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

    //Hàm xóa tài khoản
    public function delete($id)
    {
        $user = User::find($id);
        $order = Orders::where('id_user', $user->id)->get();
        $order->delete();
        $user->delete();
        return redirect()->route('admin.users')->with('toast_success', 'Xóa tài khoản thành công');
    }
}
