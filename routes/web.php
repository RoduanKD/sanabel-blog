<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/', function () {
//     $posts = Post::all();

//     return view('pages.home', ['posts' => $posts]);
// })->name('home');
Route::get('/login', function () {
    return view('pages.login');})->name('login');
// Route::get('/posts/read', [PostController::class, 'show'])->name('posts.show');
// Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::get('/posts/{id}/show', [PostController::class, 'show'])->name('posts.show');
Route::resource('posts', PostController::class);
Route::get('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.delete');

Route::resource('categories', CategoryController::class);
Route::get('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
// Route::post('/categories', [CategoryController::class, 'store']);
// Route::get('/categories/index', [CategoryController::class, 'index']);

Route::resource('tags', TagController::class);
Route::get('/tags/{id}/delete', [TagController::class, 'destroy'])->name('tags.destroy');
// Route::get('/tags/create', [TagController::class, 'create']);
// Route::post('/tags', [TagController::class, 'store']);
// Route::get('/tags/{tag}', function (Tag $tag) {
//     return $tag;
// });
// Route::get('/posts/{post}', function (Post $post) {
//     return $post;
// });
