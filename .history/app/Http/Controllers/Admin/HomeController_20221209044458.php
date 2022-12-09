<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Image;

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
    }
}
