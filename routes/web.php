<?php

use app\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('layouts/home');
});

#Resorce ayuda a general las tipicas clases de CRUD 
Route::resource('/users', UsersController::class);
#Sino crearlo cada uno por si solo 
#Route::get('/users',[UsersController::class,'index']);
#Route::get('/users/create',[UsersController::class,'create']);