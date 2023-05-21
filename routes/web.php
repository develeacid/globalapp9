<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Inicio;
use App\Http\Livewire\Objetivo;
use App\Http\Livewire\Productos;
use App\Http\Livewire\Contacto;



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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
/* Rutas generadas por live wire */
//ruta de inicio
Route::get('/inicio', function () {
    return view('/livewire/inicio');
});
//ruta de objetivo
Route::get('/objetivo', function () {
    return view('/livewire/objetivo');
});
//ruta de productos
Route::get('/productos', function () {
    return view('/livewire/productos');
});
//ruta de contacto
Route::get('/contacto', function () {
    return view('/livewire/contacto');
});