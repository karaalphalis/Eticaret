<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get("kayit-ol",[RegisterController::class,'showForm'])->name("register");
Route::post("kayit-ol",[RegisterController::class,'register']);
Route::get("giris",[LoginController::class,'showForm'])->name("login");
Route::post("giris",[LoginController::class,'login']);
Route::get("cikis",[LoginController::class,'logout'])->name("logout");

Route::prefix("admin")->group(function(){
    Route::get("/",[DashboardController::class,'index']);
});
