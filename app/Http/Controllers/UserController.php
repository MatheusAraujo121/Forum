<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function createUser(){
        return view('users.createUser');
    }

    public function deleteUser(){
        return view('users.deleteUser');
    }

    public function updateUser(){
        return view('users.updateUser');
    }

}
