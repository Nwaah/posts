<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// posts
Route::controller(PostController::class)->group(function () {
    Route::any('/post', 'index');
    Route::get('/post/new', 'create');
    Route::post('/post/save', function(Request $request) {
        return (new PostController())->store($request);
    });
    Route::get('/post/{post}', function(Post $post){
        return (new PostController())->show($post->id);
    });
    Route::get('/post/edit/{post}', function(Post $post){
        return (new PostController())->edit($post);
    });
});

// auth
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function($request) {
    // save new user
});

Route::any('/login', function($request) {
    return Auth::authenticate($request->login, $request->password);
});