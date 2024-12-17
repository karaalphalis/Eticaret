<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $data = $request->only('name','email','password');
        $user = User::create($data);
        event(new UserRegisterEvent($user));
        return ;
    }
}
