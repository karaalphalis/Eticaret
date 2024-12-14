<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function liste(){
        return view('front.product-list');
    }
}
