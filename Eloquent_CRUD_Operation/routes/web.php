<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/add-post',[PostController::class,'addPost']);
Route::get('/posts',[PostController::class,'getPost']);
Route::get('/posts/{id}',[PostController::class,'getPostById']);
Route::get('/posts-delete/{id}',[PostController::class,'postDelete']);
Route::get('/edit-post/{id}',[PostController::class,'editPost']);
Route::post('/update-post',[PostController::class,'updatePost'])->name('update-post');
Route::post('/create-post',[PostController::class,'createPost'])->name('create-post');
