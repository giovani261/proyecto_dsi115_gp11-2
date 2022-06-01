<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    //
    public function consultarmedicamentoajax(){
        $medicamentos = Medicamento::select('id','nombre')->orderBy('nombre')->get();
        return response()->json(['medicamentos' => $medicamentos]);
    }
}

