<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function GoEvaluation(){
        return view('evaluation');
    }
}
