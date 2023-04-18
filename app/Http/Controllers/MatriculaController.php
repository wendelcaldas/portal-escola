<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    //
    public function inicio(){
        // var_dump($_GET);
        return view('matricula');
    }

    public function cadastoNovaMatricula(){
        // Adicionar lógica de recepção dos dados do form matricula.
    }
}
