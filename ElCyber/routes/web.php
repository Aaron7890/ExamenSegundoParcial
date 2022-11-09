<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/formulario', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/consultar', [ControladorPaginas::class, 'fConsultar'])->name('NConsultar');

Route::post('/guardarFormulario', [ControladorPaginas::class, 'procesarFormulario'])->name('NProcesar');