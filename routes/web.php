<?php
namespace App\Http\Controllers;
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
    return view('welcome');
});
route::get('/curso/{dato1}',[controllerTaller::Class,'es_primo'])->name('curso.show');

Route::get('/curso/{dato1}/{dato2}',[controllerTaller::class,'hola'])->name('curso.show');
Route::get('/primo/{numero}', [controllerTaller::class, 'esPrimo'])->name('curso.esPrimo');
Route::get('/curso',[controllerTaller::class,'create']);
Route::post('/curso',[controllerTaller::class,'store'])->name('curso.store');

Route::get('/tallerprimo', [controllerTaller::class, 'create']);
Route::post('/tallerprimo', [controllerTaller::class, 'store'])->name('taller.store');

Route::get('/talleramigo', [controllerTaller::class, 'createForm']);
Route::post('/talleramigo', [controllerTaller::class, 'storeAmigos'])->name('taller.store-amigos');

Route::get('/calculo-notas', [controllerTaller::class, 'createNotas']);
Route::post('/calculo-notas', [controllerTaller::class, 'storeNotas'])->name('taller.store-notas');

Route::get('/calcular-cuadratica', [controllerTaller::class, 'createCuadratica']);
Route::post('/calcular-cuadratica', [controllerTaller::class, 'storeCuadratica'])->name('cuadratica.store');
