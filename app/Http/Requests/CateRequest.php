<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_cate' => 'required || unique:category', 
        ];
    }
    public function messages()
    {
        return [
            'name_cate.unique' => 'Danh mục đã tồn tại',
            
        ];
    }
}
