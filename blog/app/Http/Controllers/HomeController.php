<?php

/** Namespace Lugar donde se encuentra el archivo */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
/**serie de metodos que administra las rutas */
{
    /**metodo invoke solo administra una ruta */
    public function __invoke()
    {
        return "Bienvenido a la Página Principal";
    }
}
