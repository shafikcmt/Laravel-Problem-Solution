<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dropdownController;


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



Route::get('/', [dropdownController::class, 'view']);
Route::get('get-course', [dropdownController::class, 'getCourse'])->name('getCourse');

