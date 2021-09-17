<?php

use App\Models\Product;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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
Route::post('/products', [ProductController::class, 'store'])->name('store')->middleware('isadmin');
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete')->middleware('isadmin');
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('update')->middleware('isadmin');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit')->middleware('isadmin');

Route::get('/create', [ProductController::class, 'create'])->name('create')->middleware('isadmin');

Route::get('/search', [ProductController::class, 'search'])->name('search');

Route::get('/filter/{catMain}/{catSub?}', [ProductController::class, 'filter'])->name('filter');

Route::get('/viewByAuthor/{author}', [ProductController::class, 'viewByAuthor'])->name('viewByAuthor');
Route::get('/viewByTag/{tag}', [ProductController::class, 'viewByTag'])->name('viewByTag');

/* Cart Routes */

Route::get('/cart', [CartController::class, 'getCart'])->name('getCart')->middleware('auth');
Route::get('/cart/{product_id}', [CartController::class, 'addCart'])->name('addCart')->middleware('auth');
Route::delete('/cart/{product_id}', [CartController::class, 'removeCart'])->name('removeCart')->middleware('auth');
Route::delete('/all/cart', [CartController::class, 'deleteAllProducts'])->name('deleteAllProducts')->middleware('auth');

/* //Users Routes */

Route::get('users', [UserController::class, 'getUser'])->name('getUser');

Route::delete('users/delete/{id}', [UserController::class, 'destroyUsers'])->name('destroyUsers')->middleware('isadmin');

Route::patch('/updateUsers/{id}', [UserController::class, 'updateUsers'])->name('updateUsers')->middleware('isadmin');

Route::get('/editUser/{id}', [UserController::class, 'editUser'])->name('editUser')->middleware('isadmin');

/* Profile Routes */

Route::get('/profile/{id}', [ProfileController::class, 'getMyProfile'])->name('myProfile')->middleware('auth');

Route::patch('/updateProfile/{id}', [ProfileController::class, 'updateMyProfile'])->name('updateMyProfile')->middleware('auth');

Route::get('/editProfile/{id}', [ProfileController::class, 'editMyProfile'])->name('editMyProfile')->middleware('auth');

Route::delete('profile/delete/{id}', [ProfileController::class, 'destroyProfile'])->name('deleteMyProfile')->middleware('auth');


