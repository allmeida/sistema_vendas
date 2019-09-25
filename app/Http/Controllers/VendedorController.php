<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
    	return view('vendedores.lista');
    }

    public function novo() {
    	return view('vendedores.formulario');
    }
}
