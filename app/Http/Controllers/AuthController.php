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
                        ->intended('/')
                        ->with('Success','Login realizado com successo.');
            }
            return back()->with([
                'message'=> 'Credenciais inválidas.',
            ])->withInput();
        }
    }
    public function logoutUser(){
        Auth::logout();
        return redirect()
                ->route('FirstPage')
                ->with('message','Logout realizado com successo.');
    }
}
