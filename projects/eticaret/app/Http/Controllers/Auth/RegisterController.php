<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        dd($request->all());
    }
}
