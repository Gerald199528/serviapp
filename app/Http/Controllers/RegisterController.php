<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

        public function register(RegisterRequest $request){
         $user = User::create($request->validated());
         return redirect('/inicio')->with('success', "Usuario creado Correctamente.");
}
}
