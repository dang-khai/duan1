<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin.pages.home');
    }
    public function product()
    {
        return view('admin.pages.product');
    }
    public function category()
    {
        return view('admin.pages.category');
    }
}
