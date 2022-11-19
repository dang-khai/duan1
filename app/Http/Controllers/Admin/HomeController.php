<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductValidate;


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

    public function addProduct(ProductValidate $request){
        $input = $request->validated();
        if ($this->Product->addProduct($input)) {
            return redirect()->route('admin_product')->with('success', 'Add product succesfully');;
        } else {
            return redirect('admin_product')->with('error', 'Add product unsuccesfully');;
        }
    }
    
    public function deleteProduct($id){
        if ($this->Product->deleteProduct($id)) {
            return redirect('admin/product')->with('success', 'Delete Successfully');
        } else {    
            return redirect('admin/product')->with('error', 'unsuccessfully');;
        }
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
        $input = [
            'id' => $request->id,
            'id_cate' => $request->id_cate,
            'name' => $request->name,
            'year' => $request->year,
            'color' => $request->color,
            'description' => $request->description,
            'price' => $request->price,
        ];
        if($this->Product->updateProduct($request->id, $input)){
            return back()->with('success', 'Product updated successfully');
        };
    }
}
