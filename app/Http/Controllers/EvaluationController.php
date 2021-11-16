<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function GoEvaluation(){
        return view('evaluationCUestions/Planear/evaluationPlanear');
    }

    public function SectionHacer(){
        return view('evaluationCUestions/hacer/evaluationhacer');
    }
    


}
