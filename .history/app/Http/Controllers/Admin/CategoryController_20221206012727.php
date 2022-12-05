<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductValidate;
use App\Http\Requests\CateRequest;
use Illuminate\Support\Facades\Storage;


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

    public function addCategory(CateRequest $request){
        $input = $request->validated();
        $addCate = DB::table('category')->insert($input);
        if($addCate){
            toast('Add Category successfully!','success')->autoClose(1500);
            return back();
        }
    }

    public function editCategory(CateRequest $request) {
        $input = $request->validated();
        if(DB::table('category')->where('id', '=', $id)->update($input)){
            toast('Change category successfully!','success')->autoClose(1500);
            return back();
        };
    }

    public function deleteCategory($id){
        $img = Category::find($id)->allImageCate;
        foreach ($img as $img) {
            $url = $img->url;
            Storage::disk('public')->delete($url);
        };
        if(DB::table('category')->where('id', '=', $id)->delete()){
            toast('Delete category successfully!','success')->autoClose(1500);
            return back();
        }
    }
}
