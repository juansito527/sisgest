<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroEvaluacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LoginRegister;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');


/* ruta para el login */
Route::get('Login',[LoginController::class,'GoLogin'])->name('inicioDeSesion');
/* ruta para el registro de la evaluación */
Route::get('RegistroEvaluacion',[RegistroEvaluacionController::class,'irAlRegistro'])->name('RegisterEvaluation');
/* ruta para la vista evaluación */
Route::get('evaluacion',[EvaluationController::class,'GoEvaluation'])->name('evaluationview');

