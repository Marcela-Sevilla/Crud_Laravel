<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

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

Route::get('/', [ArticuloController::class, 'index']);

Route::get('/create', function () {
    return view('create');
})->name('crear');

Route::get('/edit', function () {
    return view('edit');
})->name('editar');


Route::get('/edit/{id}', [ArticuloController::class, 'edit']);

Route::post('/articulos', [ArticuloController::class, 'store'])->name('register');

Route::put('/articulos/{id}', [ArticuloController::class, 'update']);

Route::delete('/destroy/{id}', [ArticuloController::class, 'destroy']);
