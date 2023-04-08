<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**Metodo para mostrar la pagina principal */
    public function index(){
        return "Bienvenidos a la página de cursos";

    }

    /**Método para crear formularios */
    public function create(){
        return "En esta pagina podrás crear un Curso";
    }

    /**Método para mostrar algo en pantalla */
    public function show($curso){
        return "Bienvenido al curso: $curso";
    }
}
