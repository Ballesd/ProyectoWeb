<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::resource('API', App\Http\Controllers\ApiController::class)->middleware('auth');
Route::resource('empleado', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::resource('proveedor', App\Http\Controllers\ProveedorController::class)->middleware('auth.admin');
Route::resource('compañia', App\Http\Controllers\CompañiaController::class)->middleware('auth.admin');    
Route::resource('inventario', App\Http\Controllers\InventarioController::class)->middleware('auth.admin');    
Route::resource('produccion', App\Http\Controllers\ProduccionController::class)->middleware('auth.admin');
Route::get('dowload_pdf','App\Http\Controllers\ProveedorController@generar_pdf')->name('descargar_pdf');    
Route::get('dowload-pdf','App\Http\Controllers\InventarioController@generar_pdf')->name('descargar-pdf');
Route::get('exportar-excel','App\Http\Controllers\EmpleadoController@descarga_excel')->name('descarga_excel');


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
  