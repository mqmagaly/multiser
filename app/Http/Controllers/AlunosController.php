<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function getAlunos(Request $request){
        dd($request->all());
    }//
}
