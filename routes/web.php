<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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


Route::get('/',HomeController::class);

Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');
Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/create',[CursoController::class,'create']);
Route::delete('curso/{curso}', [CursoController::class,'destroy'])->name('curso.destroy');
Route::get('cursos/{curso}', [CursoController::class,'show'])->name('curso.show');
