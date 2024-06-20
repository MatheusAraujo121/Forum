<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

//Authentication routes
Route::match (['get','post'], '/login', 
    [AuthController::class,'loginUser']
)->name('login');

Route::get('/logout', 
    [AuthController::class,'logoutUser']
)->name('logout');

Route::match (['get', 'post'],'/register', 
    [UserController::class,'registerUser']
)->name('register');

Route::middleware('auth')->group(function(){
    Route::get('/users', 
        [UserController::class,'listAllUsers']
    )->name('routeListAllUsers');
    
    Route::get('/users/{uid}', 
        [UserController::class,'listUserByID']
    )->name('routeListUserByID');

    Route::put('/users/{uid}/update', 
        [UserController::class,'updateUser']
    )->name('UpdateUser');

    Route::delete('/users/{uid}/delete', 
        [UserController::class,'deleteUser']
    )->name('DeleteUser');
});

//Welcome route
Route::get('/', function () {
    return view('welcome');
})->name('FirstPage');

//User routes

//Route::get('/users/ID/edit', [UserController::class,'updateUser'])->name('routeUpdateUser');
//Route::get('/users/ID/delete', [UserController::class,'deleteUser'])->name('routeDeleteUser');