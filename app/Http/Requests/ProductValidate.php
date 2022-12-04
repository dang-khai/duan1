<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required || unique:product',
            'id_cate' => 'required',
            'year' => 'required',
            'color' => 'required',
            'status' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'id_cate.required' => 'Loại required',
            'year.required' => 'Year is required',
            'color.required' => 'color is required',
            'status.required' => 'color is required',
            'description.required' => 'description is required',
            'price.required' => 'price is required',
        ];
    }
}
