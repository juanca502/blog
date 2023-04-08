<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**Metodo para mostrar la pagina principal */
    public function index(){
        return view('cursos.index');

    }

    /**Método para crear formularios */
    public function create(){
        return view('cursos.create');
    }

    /**Método para mostrar algo en pantalla */
    public function show($curso){
        return view('cursos.show',['curso'=>$curso]);   }
}
