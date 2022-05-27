<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// users
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
//question
Route::get('/question', [App\Http\Controllers\HomeController::class, 'question'])->name('question');
//view exam
Route::get('/view exam', [App\Http\Controllers\HomeController::class, 'view_exam'])->name('view_exam');
// view result
Route::get('/view result', [App\Http\Controllers\HomeController::class, 'view_result'])->name('view_result');
