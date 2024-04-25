<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bel', function () {
    return view('belajar');
});

Route::get('/page',[PageController::class,'home']);
Route::get('/page/about',[PageController::class,'about']);
Route::get('/page/contact',[PageController::class,'contact']);

Route::get('student', [StudentController::class,'index']);
Route::get('student/add', [StudentController::class,'add']);
Route::post('student/addsave', [StudentController::class,'addsave']);
Route::get('student/edit/{nim}', [StudentController::class,'edit']);
Route::post('student/editsave', [StudentController::class,'editsave']);
Route::get('student/delete/{nim}', [StudentController::class,'delete']);