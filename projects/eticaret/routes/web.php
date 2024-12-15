<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('');
});*/
Route::get('/' ,[FrontController::class,'index']);
Route::get("/urunler-listesi",[ProductController::class,'list']);
Route::get("/urun-detay",[ProductController::class,'detail']);
Route::get("/sepet",[CardController::class,'card']);
