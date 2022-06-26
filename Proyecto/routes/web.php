<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::resource('empleado', App\Http\Controllers\EmpleadoController::class);
Route::resource('proveedor', App\Http\Controllers\ProveedorController::class);
Route::resource('compañia', App\Http\Controllers\CompañiaController::class);  
Route::resource('produccion', App\Http\Controllers\ProduccionController::class);    

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest') 
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');    

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');    

Route::get('/admin',[AdminController:: class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
  