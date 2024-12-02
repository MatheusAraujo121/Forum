<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CommentController;

//Authentication routes
Route::match(['get', 'post'], '/login', [AuthController::class, 'loginUser'])->name('login');

Route::match(['get', 'post'], '/register', [UserController::class, 'registerUser'])->name('register');

Route::get('/logout', [AuthController::class, 'logoutUser'])->name('logout');

//Category routes
Route::group(['prefix' => 'categories', 'middleware' => ['auth']], function () {

    Route::match(['get', 'post'], '/create', [CategoryController::class, 'createCategory'])->name('categoryCreate');

    Route::get('/edit/{uid}', [CategoryController::class, 'editCategory'])->name('EditCategory');

    Route::put('/{uid}/update', [CategoryController::class, 'updateCategory'])->name('UpdateCategory');

    Route::delete('/{uid}/delete', [CategoryController::class, 'deleteCategory'])->name('DeleteCategory');
});

Route::group(['prefix' => 'Categories'], function () {

    Route::get('/{uid}', [CategoryController::class, 'viewCategory'])->name('ViewCategory');

    Route::get('/', [CategoryController::class, 'listCategories'])->name('listCategories');
});


//User routes
Route::group(['prefix' => 'users', 'middleware' => ['auth']], function () {

    Route::get('/', [UserController::class, 'listAllUsers'])->name('routeListAllUsers');

    Route::get('/{uid}/profile', [UserController::class, 'listUserByID'])->name('routeListUserByIDS');

    Route::get('/{uid}', [UserController::class, 'listUserByIDS'])->name('routeListUserByID');

    Route::put('/{uid}/update', [UserController::class, 'updateUser'])->name('UpdateUser');

    Route::delete('/{uid}/delete', [UserController::class, 'deleteUser'])->name('DeleteUser');

});

Route::middleware('auth')->get('/delete_confirm', function () {
    return view('users.confDel');
})->name('deleteConfirm');

//Topic routes
Route::group(['prefix' => 'topic', 'middleware' => ['auth']], function () {

    Route::get('/', [TopicController::class, 'index'])->name('viewTopic');
    Route::get('/create', [TopicController::class, 'create'])->name('newTopic');
    Route::post('/create', [TopicController::class, 'store'])->name('createTopic');
    Route::get('/{id}/edit', [TopicController::class, 'edit'])->name('editTopic');
    Route::put('/{id}/edit', [TopicController::class, 'update'])->name('updateTopic');
    Route::delete('/{id}/destroy', [TopicController::class, 'destroy'])->name('deleteTopic');


 
});

//Comment routes 
Route::group(['prefix' => 'comment', 'middleware' => ['auth']], function () {
    Route::get('/', [CommentController::class, 'index'])->name('viewComment');
    Route::get('/create', [CommentController::class, 'create'])->name('newComment');
    Route::post('/create', [CommentController::class, 'store'])->name('createComment');
    Route::get('/{id}/edit', [CommentController::class, 'edit'])->name('editComment');
    Route::put('/{id}/edit', [CommentController::class, 'update'])->name('updateComment');
    Route::delete('/{id}/destroy', [CommentController::class, 'destroy'])->name('deleteComment');
    Route::resource('comments', CommentController::class);
});

//Tags routes
Route::group(['prefix' => 'tag', 'middleware' => ['auth']], function () {

    Route::get('/edit/{uid}', [TagController::class, 'editTag'])->name('EditTag');

    Route::match(['get', 'post'], '/create', [TagController::class, 'createTag'])->name('newTag');

    Route::put('/edit/{uid}/update', [TagController::class, 'updateTag'])->name('UpdateTag');

    Route::delete('/delete/{uid}', [TagController::class, 'deleteTag'])->name('DeleteTag');
});

Route::group(['prefix' => 'tags'], function () {

    Route::get('/', [TagController::class, 'listTags'])->name('listTags');

    Route::get('/{uid}', [TagController::class, 'viewTag'])->name('ViewTag');
});

//Posts routes
Route::group(['prefix' => 'post', 'middleware' => ['auth']], function () {

    Route::get('/create', function () {
        return view('posts.createPost');
    })->name('newPost');

    Route::get('/edit', function () {
        return view('posts.editPost');
    })->name('editPost');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('/', function () {
        return view('posts.viewPost');
    })->name('viewPost');
});

//Report routes
Route::group(['prefix' => 'report', 'middleware' => ['auth']], function () {
    Route::get('/', [UserController::class, 'listUsersComplaint'])->name('newReport');
});


//Welcome route
Route::get('/', function () {
    return view('welcome');
})->name('FirstPage');
