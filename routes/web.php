<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


//usando controladores
Route::get('/', HomeController::class);
Route::get('cursos', [CursoController::class,'index'])->name('curso.index');
Route::get('cursos/create', [CursoController::class,'create'])->name('curso.create');
Route::get('cursos/{curso}', [CursoController::class,'show'])->name('curso.show');

//Sin usar controladores
/*Route::get('/', function () {
    return view('paginas.inicio');
    //return view('welcome');
});*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
