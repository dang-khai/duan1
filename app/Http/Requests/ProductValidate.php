<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

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
            'name' => 'required',
            'year' => 'required',
            'color' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }
    public function failedValidation(Validator $validator){
       
    }
    
    public function messages(){
        return [
            'name.required' => 'Name is required',
            'year.required' => 'Year is required',
            'color.required' => 'color is required',
            'description.required' => 'description is required',
            'price.required' => 'price is required',
        ];
    }
}