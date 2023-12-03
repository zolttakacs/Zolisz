<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\User;

class RegistrationController extends Controller
{
    public function showForm(){
     return view('auth.registrationForm');
    }

    public function processData(RegistrationRequest $request){
    //ha lefut akkor helyesek az adatok -> regisztrálni kell
    User::create($request->validated());
    }
}
