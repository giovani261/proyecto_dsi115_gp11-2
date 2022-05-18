<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservaDeCita;
use Auth;

class AgendaController extends Controller
{
    public function index()
    {
        //$reservas = DB::table('reservas_de_citas')->select('*')->get();
        //$reservas = ReservaDeCita::all();
        //return view('agenda',compact('reservas'));
    }

    public function registro(Request $request){
        if(Auth::user()->hasRole(['administrador']))
        {
            try {
                $user_id = Auth::user()->id;
                $nombrePaciente = request('NombrePaciente');
                $telefono = request('Telefono');
                $fecha = request('Fecha');
                $hora = request('Hora');
                $especialidad = request('Especialidad');

                $reserva = new ReservaDeCita();
            
                $reserva->user_id = $user_id;
                $reserva->nombre = $nombrePaciente;
                $reserva->telefono = $telefono;
                $reserva->fecha = $fecha;
                $reserva->especialidad = $especialidad;
                
                $reserva->save();
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'guardado']);
            } catch (Throwable $e) {
                //report($e);
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'error']);
            }
        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }
}


