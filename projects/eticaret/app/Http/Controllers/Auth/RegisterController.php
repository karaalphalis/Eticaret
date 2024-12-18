<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
    public function verify(Request $request){
        $userID= Cache::get('verify_token' . $request-> token);
        if(!$userID){
            dd("user yok");
        }

        $user= User::findOrFail($userID);
        $user->email_verified_at= now();
        $user->save();
        Cache::forget('verify_token' . $request->token);

        dd("user doğrulandı");
    }
}
