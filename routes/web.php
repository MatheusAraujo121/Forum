<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TagController;

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

    Route::match(['get', 'post'],'/newtag', 
        [TagController::class,'createTag']
    )->name('newTag');

    Route::get('/edittag/{uid}', 
        [TagController::class,'editTag']
    )->name('editTag');

    Route::put('/edittag/{uid}/update', 
        [TagController::class,'updateTag']
    )->name('updateTag');

    Route::delete('/edittag/{uid}/delete', 
        [TagController::class,'deleteTag']
    )->name('deleteTag');
    
    Route::get('/edittopic', function () {
        return view('topics.editTopic');
    })->name('editTopic');

    Route::get('/newpost', function () {
        return view('posts.createPost');
    })->name('newPost');

    Route::get('/editpost', function () {
        return view('posts.editPost');
    })->name('editPost');

    Route::match (['get', 'post'],'/CreateCategory', 
        [CategoryController::class,'createCategory']
    )->name('categoryCreate');

    Route::get('/users/{uid}', 
        [CategoryController::class,'listUserByIDS']
    )->name('routeListUserByID');

    Route::put('/Category/{uid}/update', 
        [CategoryController::class,'updateCategory']
    )->name('UpdateCategory');

    Route::delete('/Category/{uid}/delete', 
        [CategoryController::class,'deleteCategory']
    )->name('DeleteCategory');
    

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
Route::get('/viewtag', 
    [TagController::class, 'viewTag']
)->name('viewTag');

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