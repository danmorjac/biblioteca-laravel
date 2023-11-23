<?php

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
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view("inicio");
    })->name('inicio');

Route::resource('libros', LibroController::class);

Route::get('/libros', [LibroController::class, 'index'])
->name('libros.index');

Route::get('/libros/{id}', [LibroController::class, 'show'])
->name('libros.show');

Route::delete('/libros/{id}', [LibroController::class, 'destroy'])
->name('libros.destroy');

Route::get('login', [LoginController::class, 'loginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');



