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
    return view('users.pages.home');
})->name('user_home');

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('admin_home'); //trang home admin
    Route::get('/product', [HomeController::class, 'product'])->name('admin_product'); // trang product admin

    Route::get('/product', [HomeController::class, 'edit_product']); // edit product edit

    Route::prefix('/product')->group(function () {
        Route::get('edit/{id}', [HomeController::class, 'edit_product'])->name('admin_edit'); // edit product admin
    });

    Route::get('/category', [HomeController::class, 'category'])->name('admin_category'); // trang category admin
    Route::get('/customers', [HomeController::class, 'customers'])->name('admin_customers'); //trang customers admin
    Route::get('/orders', [HomeController::class, 'orders'])->name('admin_orders'); //trang orders admin
    Route::get('/test', [HomeController::class, 'test']);
});
