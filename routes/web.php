<?php

use App\Models\Product;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;




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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::post('/products', [ProductController::class, 'store'])->name('store')->middleware(IsAdmin::class);
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete')->middleware(IsAdmin::class);
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('update')->middleware(IsAdmin::class);
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit')->middleware(IsAdmin::class);

Route::get('/create', [ProductController::class, 'create'])->name('create')->middleware(IsAdmin::class);

Route::get('/search', [ProductController::class, 'search'])->name('search');

Route::get('/filter/{catMain}/{catSub?}', [ProductController::class, 'filter'])->name('filter');

Route::get('/viewByAuthor/{author}', [ProductController::class, 'viewByAuthor'])->name('viewByAuthor');
Route::get('/viewByTag/{tag}', [ProductController::class, 'viewByTag'])->name('viewByTag');

//Cart Routes

Route::get('/cart/{user_id}', [CartController::class, 'getCart'])->name('getCart');
