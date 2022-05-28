<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'addStudent']);
Route::post('add-student',[StudentController::class,'storeStudent'])->name('student-create');
Route::get('all-student',[StudentController::class,'Student']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent']);
Route::post('upadte-student',[StudentController::class,'updateStudent'])->name('update-student');
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent']);
