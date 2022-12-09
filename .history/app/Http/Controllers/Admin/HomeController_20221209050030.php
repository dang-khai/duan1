<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->Product = new Product();
        $this->Category = new Category();
    }
    public function home()
    {
        return view('admin.pages.home');
    }
    public function orders()
    {
        return view('admin.pages.order');
    }
    public function customers()
    {
        return view('admin.pages.customer');
    }
    public function showProductDetails($slug, $id)
    {
        $product = Product::find($id);
        $images = Image::where('id_product', $product->id)->get();
        $cate = Category::where('id', $product->id_cate)->get('name_cate');
        $pro_id = $product->id;
        return view('users.pages.product-detail', compact('pro_id', 'product', 'images', 'cate'));
    }
    public function postOrder(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'sdt' => 'required',
            'address' => 'required',
        ];
        $messages = [
            'name.required' => 'Phải nhập họ tên',
            'email.request' => 'Phải nhập email',
            'email.email' => 'Email không đúng định dạng',
            'address.required' => 'Phải nhập địa chỉ',
        ];

        $validator = Validator::make($request->all(), []);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
