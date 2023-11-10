<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('/post/delete/{post}', function (Post $post) {
        return (new PostController())->destroy($post);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
