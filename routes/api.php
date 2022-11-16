<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CateApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/allProduct', [ProductApiController::class, 'index']);
Route::post('/addProduct', [ProductApiController::class, 'store']);
Route::delete('/deleteProduct/{id}', [ProductApiController::class, 'destroy'])->name('deleteProduct');
//cách dùng để xài tất cả function trong ProductApiController mà không cần khai báo nhiều như trên
Route::resource('products', ProductApiController::class);
// em hõng có xài resource :)))))
Route::get('/allCategory', [CateApiController::class, 'index']);
Route::post('/addCategory', [CateApiController::class, 'store']);
