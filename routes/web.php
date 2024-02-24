<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/home/{id}/{title}',[FrontController::class,'index'])->name('ho');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/admin',AdminController::class)->names('admin');
Route::resource('/product',ProductController::class)->names('product');
Route::get('/home',[FrontController::class,'home']);