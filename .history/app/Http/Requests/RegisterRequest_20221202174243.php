<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email phải đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Phải nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
            'password.confirmed' => 'Mật khẩu không trùng nhau'
        ];
    }
}
