<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginUser(Request $request){
        if($request->method() === 'GET'){
            return view('auth.loginUser');
        }else{
            $username = $request->username;
            $password = $request->password;
            $credentials = $request->only('username','password');
            print($username . " - " . $password . "<br>");
            print_r($credentials);
        }
    }
    public function logoutUser(){
        return view('auth.logoutUser');
    }
}
