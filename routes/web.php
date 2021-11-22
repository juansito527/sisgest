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





/* Rutas evaluacion */
/* Route::get('evaluacion',[EvaluationController::class,'GoEvaluation'])->name('evaluationview'); */

Route::group(['prefix' => 'evaluacion'], function() {
    
    Route::get('/', [EvaluationController::class,'GoEvaluation'])->name('evaluationview');
    Route::get('hacer', [EvaluationController::class,'SectionHacer'])->name("hacer");
    Route::get('verificar', [EvaluationController::class,'SectionVerficar'])->name("verificar");
    Route::get('actuar', [EvaluationController::class,'SectionActuar'])->name("actuar");
});