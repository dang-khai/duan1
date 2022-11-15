<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use RealRashid\SweetAlert\Facades\Aler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('users.index');
})->name('user_home');

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('admin_home'); //trang home admin
    Route::get('/product', [ProductController::class, 'product'])->name('admin_product'); // trang product admin
    //set trước nào xài mở mấy cái ở dưới ra nha
    // Route::get('/customers', [ProductController::class, 'customers'])->name('admin_customers'); //trang customers admin
    // Route::get('/orders', [ProductController::class, 'orders'])->name('admin_orders'); //trang orders admin
});
