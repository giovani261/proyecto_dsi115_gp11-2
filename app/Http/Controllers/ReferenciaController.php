<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenciaController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function editar_referencia() {
        return view('editar-referencia');
    }
}
