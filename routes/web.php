<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'create']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::put('posts/{post}', [PostController::class, 'update']);

Route::post('users', [UserController::class, 'create']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);

Route::post('comments', [CommentController::class, 'create']);
Route::get('comments/{comment}', [CommentController::class, 'show']);
Route::put('comments/{comment}', [CommentController::class, 'update']);

Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products', [ProductController::class, 'store'])->name('product.store');
Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}', [ProductController::class, 'delete'])->name('product.delete');

