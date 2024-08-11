<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route ::get('/',function(){
    return view ("about");
});
Route ::get("/product",function(){
    return view ("product.product");
});


Route::get('/product/test', [\App\Http\Controllers\PorductController::class, 'index']);