<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use GuzzleHttp\Psr7\Request;

use App\Models\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $posts = Post::all();

    return view('pages.home',['posts' => $posts]);
});


Route::post('/posts' , [PostController::class, 'store']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{id}',[PostController::class,'show']);
Route::get('/posts/{id}/edit', [PostController::class ,'edit']);
Route::put('/posts/{id}', [PostController::class ,'update']);

Route::resource('categories', CategoryController::class);




    return view('pages.home', ['posts' => $posts]);
})->name('home');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}/read', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::resource('categories', CategoryController::class);
Route::get('/tags/{tag}', function (Tag $tag) {
    return $tag;
});

