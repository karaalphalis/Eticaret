<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('');
});*/
Route::get('/' ,[FrontController::class,'index']);
Route::get("/urunler-listesi",[ProductController::class,'liste']);
Route::get("/urun-detay",[ProductController::class,'detay']);
Route::get("/sepet",[CardController::class,'card']);
