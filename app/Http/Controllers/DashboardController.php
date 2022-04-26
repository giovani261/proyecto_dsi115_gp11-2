<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}
