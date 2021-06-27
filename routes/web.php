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

Route::middleware(['auth'])->group(function () { 
    Route::get('/api', [App\Http\Controllers\ApiController::class, 'index'])->name('api')->middleware('auth');
    Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');
    Route::get('/course/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
    Route::post('/course', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
});
