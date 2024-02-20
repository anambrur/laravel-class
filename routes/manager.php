<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ManagerController::class,'index']);
Route::get('/profile',[ManagerController::class,'profile']);