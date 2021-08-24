<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;




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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::post('/products', [ProductController::class, 'store'])->name('store');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('delete');
Route::patch('/products/{id}', [ProductController::class, 'update'])->name('update');

Route::get('/products/create', [ProductController::class, 'create'])->name('create');





