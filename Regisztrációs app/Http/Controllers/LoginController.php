<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm(){
        return view('auth.loginForm');
    }

    public function processData(LoginRequest $request){
        // kigyűjtöm a bejelentkezéshez szükséges adatok
        $credentials = [
            
            'email'     => $request->post('email'), 
            'password'  => $request->post('password')
        ];

        // elvégzem a bejelentkeztetéshez szükséges ellenőrzést 
        if(!Auth::validate($credentials)){
            // ha nem sikerül ilyen adattal felhasználót találni, akkor vissza bejelentkező formra
            return redirect()->route('login.form');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials); // az adatok alapján visszakeresem a usert
        Auth::login($user); // bejelentkeztetem a felhasználó a munkafolyamatba 
    }
}
