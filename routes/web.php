<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/




route::get('/', [App\Http\Controllers\homeController::class, 'gethome'])->name('home');

route::get('/register/create', [App\Http\Controllers\connectController::class, 'getregister'])->name('register');
route::post('/register/create', [App\Http\Controllers\connectController::class, 'postregister'])->name('register');

route::get('/login', [App\Http\Controllers\connectController::class, 'getlogin'])->name('login');

route::post('/login', [App\Http\Controllers\connectController::class, 'postlogin'])->name('login');

route::get('/logout', [App\Http\Controllers\connectController::class, 'logout'])->name('logout');



route::get('/encuesta', [App\Http\Controllers\encuestaController::class, 'getencuesta'])->name('encuesta');
route::post('/encuesta', [App\Http\Controllers\encuestaController::class, 'postencuesta'])->name('encuesta');


route::get('/estadisticas', [App\Http\Controllers\estadisticasController::class, 'getestadisticas'])->name('estadisticas');