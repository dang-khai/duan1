<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Http\Requests\ProductValidate;
use RealRashid\SweetAlert\Facades\Alert;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->Product = new Product();
        $this->Image = new Image();
        $this->Category = new Category();
    }
    public function index()
    {
        // api hiện product và cate
        $product = Product::get();
        $cate = Category::get();
        $product->map(function($product) {
            $product->img = [];
            return $product;
        });
        $img = Image::get();
        // $arr = ['product' => $product, 'cate' => $cate];
        // return response()->json($product, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidate $request)
    {
        $input = $request->validated();
        if ($this->Product->addProduct($input)) {
            return redirect()->route('admin_product')->with('success', 'Add product succesfully');;
        } else {
            return redirect('admin_product')->with('error', 'Add product unsuccesfully');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->Product->deleteProduct($id)) {
            return redirect('admin/product')->with('success', 'successfully');
        } else {
            return $id;
        }
    }
}