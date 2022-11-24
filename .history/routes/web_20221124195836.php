<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('login', function () {
    return view('users.pages.login');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('admin_home'); //trang home admin
    //route product
    Route::get('/product', [ProductController::class, 'product'])->name('admin_product'); // trang product admin
    Route::post('/product/edit', [ProductController::class, 'edit_product'])->name('admin_edit'); // edit product admin
    Route::post('/product/addProduct', [ProductController::class, 'addProduct'])->name('admin_addProduct'); // add product admin
    Route::post('/product/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin_deleteProduct'); // add product admin
    //route category
    Route::get('/category', [CategoryController::class, 'category'])->name('admin_category'); // trang category admin
    Route::post('/category/edit', [CategoryController::class, 'editCategory'])->name('admin_editCategory'); // edit product admin
    Route::post('/category/addcategory', [CategoryController::class, 'addCategory'])->name('admin_addCategory'); // add product admin
    Route::post('/category/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->name('admin_deleteCategory'); // add product admin

    Route::get('/customers', [HomeController::class, 'customers'])->name('admin_customers'); //trang customers admin
    Route::get('/orders', [HomeController::class, 'orders'])->name('admin_orders'); //trang orders admin
});
