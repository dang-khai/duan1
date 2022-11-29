<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController as HomeController_user;

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
})->name('user_home'); // Trang home guests

Route::get('/details', function () {
    return view('users.pages.product-detail')->name('details');
}); //Trang product details

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('admin_home'); //trang home admin
    //route product
    Route::get('/product', [ProductController::class, 'product'])->name('admin_product'); // trang product admin
    Route::post('/product/edit', [ProductController::class, 'edit_product'])->name('admin_edit'); // edit product admin
    Route::post('/product/addProduct', [ProductController::class, 'addProduct'])->name('admin_addProduct'); // add product admin
    Route::post('/product/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin_deleteProduct'); // add product admin

    // route images
    Route::get('/product/image/{id}', [ProductController::class, 'image'])->name('admin_imgProduct'); // product image admin
    Route::post('product/addImage/{id}', [ProductController::class, 'addImage'])->name('admin_addImage'); // add product image admin
    Route::post('product/deleteImg/{id}', [ProductController::class, 'deleteAllImage'])->name('admin_deleteImage'); // product image admin
    //route category
    Route::get('/category', [CategoryController::class, 'category'])->name('admin_category'); // trang category admin
    Route::post('/category/edit', [CategoryController::class, 'editCategory'])->name('admin_editCategory'); // edit product admin
    Route::post('/category/addcategory', [CategoryController::class, 'addCategory'])->name('admin_addCategory'); // add product admin
    Route::post('/category/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->name('admin_deleteCategory'); // add product admin

    Route::get('/customers', [HomeController::class, 'customers'])->name('admin_customers'); //trang customers admin
    Route::get('/orders', [HomeController::class, 'orders'])->name('admin_orders'); //trang orders admin
});

Auth::routes();

Route::get('/home', [HomeController_user::class, 'index'])->name('home'); //Trang home guests and users

Route::get('/forgottest', [HomeController_user::class, 'forgot']);
