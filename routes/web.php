<?php

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

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;

Route::get('/', [AlunoController::class, 'index'])->name('index');
Route::post('register/', [AlunoController::class, 'register'])->name('login');

Route::get('upload/', [AlunoController::class, 'upload'])->name('upload');
Route::post('import/', [AlunoController::class, 'import'])->name('import');

Route::get('aluno/{aluno}',[AlunoController::class, 'aluno'])->name('aluno');
Route::get('alunos/', [AlunoController::class, 'alunos'])->name('alunos');

Route::get('turmas',[TurmaController::class, 'turmas'])->name('turmas');
Route::get('turma/{turma}',[TurmaController::class, 'turma'])->name('turma');

Route::get('turma/{turma}/print',[TurmaController::class, 'print'])->name('print');