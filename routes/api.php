<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::get('table',[UserAuthController::class,'table']);
Route::post('signUp',[UserAuthController::class,'signUp']);
//this /name define what to type in postman after api salash
Route::get('/products', [ProductController::class,'index']);