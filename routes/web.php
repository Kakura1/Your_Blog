<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArticleController;
use App\Models\Category;

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

Route::get('/news', function() {
    return view('news');
});

Route::get('/about-me', function() {
    return view('about-me');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/view-profile', [HomeController::class, 'view_profile'])->name('view-profile');

Route::controller(CategoryController::class)->group(function(){
    Route::get('/categories', 'index')->name('categories.index');
    Route::post('/categories', 'store')->name('categories.store');
});

Route::resource('tags', TagController::class);
Route::resource('articles', ArticleController::class);