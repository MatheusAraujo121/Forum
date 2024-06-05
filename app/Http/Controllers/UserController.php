<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\validator;
use App\Models\User;

class UserController extends Controller
{
    //camelCase
    //no_camel_case <<
    public function listAllUsers(Request $request){
        //lógica
        return view('users.listAllUsers');
    }

    public function listUserByID(Request $request, $uid){
        print($uid);
        return view('users.listUserByID');
    }

    public function registerUser(Request $request){
        if($request->method() === 'GET'){

            return view('users.register');
        }else{

            $request->validate([
                'name'=> 'required|string|max:255',
                'email'=> 'required|string|email|max:255|unique:users',
                'password'=> 'required|string|min:8|confirmed'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('routeListAllUsers');
        }
    }

    public function deleteUser(){
        return view('users.deleteUser');
    }

    public function updateUser(){
        return view('users.updateUser');
    }

}
