<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    //
    public function index(){
    	
    	return view('novoExame');
    }

    public function novopaciente(){
    	return view('novoPaciente');
    }
}
