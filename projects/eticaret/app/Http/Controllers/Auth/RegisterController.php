<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Notifications\WelcomeMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $data = $request->only('name','email','password');
        $user = User::create($data);


        alert()->info('Bilgilendirme','Lütfen Mailinize gelen onay mailini onaylayınız');
       // dd("user kaydedildi");
        return redirect()->back() ;
    }
    public function verify(Request $request){

        $userID= Cache::get('verify_token_' . $request-> token);
        if(!$userID){
            alert()->warning('Uyarı','Token geçerlilik süresi geçmiş.');
            return redirect()->route('register');
        }
        // User dan bulup onaylama işlemi
       // $user= User::findOrFail($userID);
       // $user->email_verified_at= now();
       // $user->save();
        // En son token unutturma
        //Cache::forget('verify_token_' . $request->token);

        //Observera yönlendiriyor
        $userQuery = User::query()
            ->where('id',$userID);
        $user = $userQuery->firstOrFail();

        $userQuery->update(['email_verified_at' => now()]);

        Auth::login($user);
        alert()->info('Başarılı','Hesabınız onaylandı.');
        return redirect()->route('admin.index');
    }
    public function sendVerifyMailShowForm()
    {
        return view('auth.verify-mail');
    }

    public function sendVerifyMail(Request $request)
    {
        $data = $request->only('email');

        $user = User::query()
            ->where('email', $data['email'])
            ->whereNull('email_verified_at')
            ->first();

        if ($user)
        {
            $token = Str::random(40);

            Cache::put('verify_token_' . $token, $user->id, 3600);

            $user->notify(new WelcomeMailNotification($token));
        }

        alert()->success('Başarılı','Mail adresinize doğrulama maili gönderilmiştir.');
        return redirect()->back();
    }
}
