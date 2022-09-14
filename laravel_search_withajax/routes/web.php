<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveSearch;
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

Route::get('/live_search', [LiveSearch::class,'index']);
Route::get('/live_search/action', [LiveSearch::class,'action'])->name('live_search.action');
Route::get('/edit/{id}',[LiveSearch::class,'edit']);
