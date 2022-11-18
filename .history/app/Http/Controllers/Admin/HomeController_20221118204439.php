<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

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
    public function product()
    {
        $product = $this->Product->getAllProducts();
        $cate = $this->Category->getAllCate();
        return view('admin.pages.product', compact('product', 'cate'));
    }
    public function category()
    {
        return view('admin.pages.category');
    }
    public function orders()
    {
        return view('admin.pages.order');
    }
    public function customers()
    {
        return view('admin.pages.customer');
    }
    public function test()
    {
        $rows = DB::table('category')->get();
        $stt = 1;
        return view('admin.pages.test')->with(compact('rows', 'stt'));
    }
    public function edit_product()
    {
        return back()->withInput();
    }
}
