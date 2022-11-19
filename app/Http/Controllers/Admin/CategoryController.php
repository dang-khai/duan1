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
        return view('admin.pages.category', compact('data'));
    }
}
