<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);

Route::view('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');

Route::get('/lang/{locale}', function ($locale, Request $request) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    App::setLocale($locale);

    $request->session()->put('locale', $locale);

    return redirect()->back();
})->name('locale.toggle');

require __DIR__.'/auth.php';
