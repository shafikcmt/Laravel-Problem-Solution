<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/',[CustomAuthController::class,'index']);
Route::get('login',[CustomAuthController::class,'login'])->middleware('alreadyLogedin');
Route::get('registration',[CustomAuthController::class,'registration'])->middleware('alreadyLogedin');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/add-admin',[CustomAuthController::class,'addAdmin'])->name('add-admin');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::post('/login-admin',[CustomAuthController::class,'loginAdmin'])->name('login-admin');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/admin-dashboard',[CustomAuthController::class,'AdminDashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/admin',[CustomAuthController::class,'AdminLogin']);