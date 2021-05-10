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
Route::get('/', [App\Http\Controllers\StudentController::class, 'index']);
Route::post('index',[App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::post('/',[App\Http\Controllers\StudentController::class, 'index'])->name('index');
Route::get('login',[App\Http\Controllers\StudentController::class, 'login']);
Route::get('index',[App\Http\Controllers\StudentController::class, 'index']);
Route::post('check',[App\Http\Controllers\StudentController::class, 'check'])->name('check');
Route::get('profile',[App\Http\Controllers\StudentController::class, 'profile']);
Route::get('logout',[App\Http\Controllers\StudentController::class, 'logout']);
Route::get('delete/{id}',[App\Http\Controllers\StudentController::class, 'delete']);
Route::get('list',[App\Http\Controllers\StudentController::class, 'list']);

