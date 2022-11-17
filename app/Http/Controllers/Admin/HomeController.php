<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
}
