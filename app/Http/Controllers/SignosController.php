<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class SignosController extends Controller
{
    //
    public function signos(Request $request){
        $nombre = $request->input("NombreSigno","valor por default");
        //Codigo para insertar los datos en la bd:


        Alert::success('¡Hecho!', 'Signos vitales registrados correctamente');
        return redirect()->route('dashboard')->with('nombre',$nombre);
    }
}
