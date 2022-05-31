<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthorController::class,'addAuthorView']);
Route::post('/add-author',[AuthorController::class,'addAuthor'])->name('add-author');
Route::get('/add-post',[PostController::class,'addPostView']);
Route::post('/add-post',[PostController::class,'addPost'])->name('add-post');
Route::get('add-post/{id}',[PostController::class,'addPost']);
Route::get('show-post/{id}',[PostController::class,'showPost']);