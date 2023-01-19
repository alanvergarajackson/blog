<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return 'bienvenidos a los cursos';
    }

    public function create(){
        return "En esta pagina podrás crear un formulario de curso";
    }
    public function show($id){
        return "bienvenido al curso de: $id";
    }
}
