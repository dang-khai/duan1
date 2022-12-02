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
        $this->middleware('auth');
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
    public function forgot()
    {
        return view('users.pages.forgot');
    }
}
