<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

//User routes
Route::get('/users', [UserController::class,'listAllUsers'])->name('routeListAllUsers');
Route::get('/users/create', [UserController::class,'createUser'])->name('routeCreateUsers');
Route::get('/users/{uid}', [UserController::class,'listUserByID'])->name('routeListUserByID');
Route::get('/users/ID/edit', [UserController::class,'updateUser'])->name('routeUpdateUser');
Route::get('/users/ID/delete', [UserController::class,'deleteUser'])->name('routeDeleteUser');

//Authentication routes
Route::match (
    ['get', 'post'],
    '/login', 
    [AuthController::class,'loginUser']
)->name('login');

Route::get('/logout', [AuthController::class,'logoutUser'])->name('logout');