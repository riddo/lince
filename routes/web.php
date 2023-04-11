<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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
    return view('login');
});

//Iniciar sesión
Route::post('/', [UserController::class, 'auth'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Gestión de trabajadores
Route::get('/trabajadores', [EmployeeController::class, 'index'])->name('trabajadores');
Route::get('/trabajadores/create', [EmployeeController::class, 'create'])->name('form.trabajador');
Route::post('/trabajadores/store', [EmployeeController::class, 'store'])->name('guardar.trabajador');
