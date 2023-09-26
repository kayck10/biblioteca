<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\LivrosController;
use Faker\Guesser\Name;
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

Route::get('/alunos/index/',[AlunosController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create/', [AlunosController::class, 'create'])->name('alunos.create');
Route::post('/alunos/store/', [AlunosController::class, 'store'])->name('alunos.store');
Route::get('/alunos/edit/{id}', [AlunosController::class, 'edit'])->name('alunos.edit');
Route::put('/alunos/update/{id}', [AlunosController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/destroy/{id}', [AlunosController::class, 'destroy'])->name('alunos.destroy');
Route::get('/alunos/livros/{id}',[AlunosController::class, 'livros'])->name('alunos.livros');

Route::prefix('/livros')->controller(LivrosController::class)->group(function(){
  Route::get('/create/{id}', 'create')->name('livros.create');
  Route::post('/store', 'store')->name('livros.store');
  Route::get('/edit,{id}', 'edit')->name('livros.edit');
  Route::put('/update/{id}', 'update')->name('livros.update');
  Route::delete('/destroy/{id}', 'destroy')->name('livros.destroy');
});
