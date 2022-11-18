<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product as Product;
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
        $data = DB::table('category')->join('product', 'category.id', '=', 'product.id_cate')->get();
        $cate = DB::table('category')->get();
        return view('admin.pages.product', compact('data','cate'));
    }
    public function category()
    {
        $data = DB::table('category')->get();
        return view('admin.pages.category', compact('data'));
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
    public function edit_product(Request $request)
    {
        $input = $request->all();
        dd($input);
        // return back()->withInput();
    }
}
