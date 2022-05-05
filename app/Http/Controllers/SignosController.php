<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class SignosController extends Controller
{
    //    
    public function signos(Request $request){
               
        if ($request->ajax()) {
            $nombre = $request->input("NombreSigno","valor por default");
            return response()->json(['nombre' => $nombre,'val' => "If pasado",]);
        }
    }
}
