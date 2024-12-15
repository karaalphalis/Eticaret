<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MyOrdersController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('');
});*/
Route::get('/' ,[FrontController::class,'index']);
Route::get("/urunler-listesi",[ProductController::class,'list']);
Route::get("/urun-detay",[ProductController::class,'detail']);
Route::get("/sepet",[CardController::class,'card']);
Route::get("/odeme",[CheckoutController::class,'index']);
Route::get("/siparislerim",[MyOrdersController::class,'index']);
Route::get("/siparislerim-detay",[MyOrdersController::class,'detail']);
