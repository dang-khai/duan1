<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductValidate;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->Product = new Product();
        $this->Category = new Category();
    }

    public function category()
    {
        $data = DB::table('category')->get();
        $stt = 1;
        return view('admin.pages.category', compact('data', 'stt'));
    }

    public function addCategory(Request $request){
        $input = ['name_cate' => $request->name_cate];
        // $input = $request->all();
        // dd($input);
        if(DB::table('category')->insert($input)){
            toast('Add Category successfully!','success')->autoClose(1500);
            return back();
        }
    }

    public function editCategory(Request $request) {
        $id = $request->id;
        $input = [
            'name_cate' => $request->name_cate,
        ];
        if(DB::table('category')->where('id', '=', $id)->update($input)){
            toast('Change category successfully!','success')->autoClose(1500);
            return back();
        };
    }

    public function deleteCategory($id){
        if(DB::table('category')->where('id', '=', $id)->delete()){
            toast('Delete category successfully!','success')->autoClose(1500);
            return back();
        }
    }
}
