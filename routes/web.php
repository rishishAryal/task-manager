<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[TaskController::class,'index']);
//login and logout
Route::get('/login',[SessionController::class,'create'])->name('login')->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');
//register
Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

//tasks
Route::get('/create',[TaskController::class,'create'])->middleware('auth');
Route::post('/create',[TaskController::class,'store'])->middleware('auth');
Route::delete('/tasks/{task}/delete',[TaskController::class,'destroy'])->middleware('auth');
