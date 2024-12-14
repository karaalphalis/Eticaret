<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('');
});*/
Route::get('/' ,[FrontController::class,'index']);
Route::get("/urunler-listesi",[ProductController::class,'liste']);
