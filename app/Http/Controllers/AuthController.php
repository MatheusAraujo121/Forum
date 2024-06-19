<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $request){
        if($request->method() === 'GET'){
            return view('auth.loginUser');
        }else {
                $credentials = $request->validate([
                                'email'=> 'required|string|email',
                                'password'=> 'required|string'
                            ]);
            if(Auth::attempt($credentials)){
                return redirect()
                        ->intended('/users')
                        ->with('Success','Login realizado com successo.');
            }
            return back()->withErrors([
                'email'=> 'Credenciais inválidas.',
            ])->withInput();
        }
    }
    public function logoutUser(){
        Auth::logout();
        return redirect()
                ->route('FisrtPage')
                ->with('Success','Logout realizado com successo.');
    }
}
