<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\departamentos::class, 'index'])->middleware('auth');
Route::post('/home', [App\Http\Controllers\PacienteController::class, 'store'])->middleware('auth');

Route::get('/gestor', [App\Http\Controllers\PacienteController::class, 'index'])->middleware('auth');
Route::delete('/eliminar/{id}',[App\Http\Controllers\PacienteController::class, 'destroy'])->middleware('auth');
Route::get('editar/{id}', [App\Http\Controllers\PacienteController::class, 'show'])->middleware('auth');
Route::patch('editar/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->middleware('auth');
