<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // return view('welcome');
   return "Bienvenido a la Página Principal";
});

Route::get('cursos', function(){

    return "Bienvenidos a la página de cursos";
    });

Route::get('cursos/create', function (){
        return "En esta pagina podrás crear un Curso";
    });
    Route::get('cursos/{curso}',function($curso){
        return "Bienvenido al curso: $curso";
    });

    Route::get('cursos/{curso}/{categoria?}' , function ($curso, $categoria= null){
        if($categoria){
           return "Bienvenido al Curso $curso, de la categoria $categoria";
        }else{
           return "Bienvenido al curso: $curso";
        }
           
       });