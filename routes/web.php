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
    
    Route::get('/users/{uid}/profile', 
        [UserController::class,'listUserByID']
    )->name('routeListUserByIDS');

    Route::get('/users/{uid}', 
        [UserController::class,'listUserByIDS']
    )->name('routeListUserByID');

    Route::put('/users/{uid}/update', 
        [UserController::class,'updateUser']
    )->name('UpdateUser');

    Route::delete('/users/{uid}/delete', 
        [UserController::class,'deleteUser']
    )->name('DeleteUser');

    Route::get('/newtopic', function () {
        return view('topics.createTopic');
    })->name('newTopic');

    Route::get('/newtag', function () {
        return view('tags.createTag');
    })->name('newTag');

    Route::get('/edittag', function () {
        return view('tags.editTag');
    })->name('editTag');
    
    Route::get('/edittopic', function () {
        return view('topics.editTopic');
    })->name('editTopic');

    Route::get('/newpost', function () {
        return view('posts.createPost');
    })->name('newPost');

    Route::get('/editpost', function () {
        return view('posts.editPost');
    })->name('editPost');

    //Complaint routes
    Route::get('/report', 
    [UserController::class,'listUsersComplaint']
    )->name('newReport');
    
    //User routes
    Route::get('/delconf', function () {
        return view('users.confDel');
    })->name('confDel');
});

//Tópic routes

Route::get('/viewtopic', function () {
    return view('topics.viewTopic');
})->name('viewTopic');

//Tag routes
Route::get('/viewtag', function () {
    return view('tags.viewTag');
})->name('viewTag');

//Post routes
Route::get('/viewpost', function () {
    return view('posts.viewPost');
})->name('viewPost');

//Welcome route
Route::get('/', function () {
    return view('welcome');
})->name('FirstPage');

//Route::get('/users/ID/edit', [UserController::class,'updateUser'])->name('routeUpdateUser');
//Route::get('/users/ID/delete', [UserController::class,'deleteUser'])->name('routeDeleteUser');