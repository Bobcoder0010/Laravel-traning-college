<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.main');
});
Route::get('about', function () {
    return view('backend.pages.about');
});

Route ::get("/product",function(){
    return view ("product.product");
});


Route::get('/product/test', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/form',[\App\Http\Controllers\ProductController::class,'create']);

