<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin Index
Route::get('/admin/index', [HomeController::class, 'admin'])->name('admin');

// Route User
Route::get('/admin/user/index', [UserController::class, 'index'])->name('user.index');

// Route Category
Route::get('/admin/category/index', [CategoryController::class, 'index'])->name('category.index');

// Route Product
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('product.index');

