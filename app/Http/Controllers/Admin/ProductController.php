<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductValidate;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->Product = new Product();
        $this->Category = new Category();
    }
    public function product()
    {
        $data = DB::table('category')->join('product', 'category.id', '=', 'product.id_cate')->get();
        $cate = DB::table('category')->get();
        $stt = 1;
        return view('admin.pages.product', compact('data', 'cate', 'stt'));
    }

    public function addProduct(ProductValidate $request)
    {
        $input = $request->validated();

        if ($this->Product->addProduct($input)) {
            toast('Add product successfully!', 'success')->autoClose(1500);
            return redirect()->route('admin_product');
        }
        
    }

    public function deleteProduct($id)
    {
        if ($this->Product->deleteProduct($id)) {
            // return redirect('admin/product')->with('success', 'Delete Successfully');
            toast('Delete product successfully!', 'success')->autoClose(1500);
            return redirect('admin/product');
        } else {
            return redirect('admin/product')->with('error', 'unsuccessfully');
        }
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
        if ($this->Product->updateProduct($request->id, $input)) {
            toast('Change product successfully!', 'success')->autoClose(1500);
            return back();
        };
    }
}
