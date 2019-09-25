<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
    	return view('categorias.lista');
    }

    public function novo() {
    	return view('categorias.formulario');
    }
}
