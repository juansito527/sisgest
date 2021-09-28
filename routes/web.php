<?php

use App\Http\Controllers\RegistroEvaluacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\LoginRegister;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('RegistroEvaluacion',[RegistroEvaluacionController::class,'irAlRegistro'])->name('RegisterEvaluation');

