<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroEvaluacionController extends Controller
{
    public function irAlRegistro(){
        return view('registroEvaluacion');
    }
}
