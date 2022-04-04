<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function dashboard(Request $request){
        // if (session()->get('nombre')){
        //     $nombre = session()->get('nombre');
        //     Alert::success('Success Title', $nombre);
        // }
        // else {
        //     Alert::error('Success Title', "No se ha guardado el signo vital");
        // }
        return view('dashboard');
    }

    public function db(Request $request){
        $name = 'SELECT nombre FROM products';
        $id = 'SELECT id FROM products';
        $products = DB::select($name);
        $ids = DB::select($id);
        $array = array_column($products, 'nombre'); //se almacena en un vector normal los resultados de la consulta, es decir solo se almacenan en el vector los nombres obtenidos
        Alert::success('Success Title', 'Productos obtenidos de la bd correctamente');
        return view('dashboard')->with('name', $array);
        //return $array;
    }
}
