<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservaDeCita;
use Auth;

class ReservaDeCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole(['administrador|secretaria'])){
            $citas = ReservaDeCita::select('id','nombre','telefono')->whereNull('hora')->get();
            return view('reserva',compact('citas'));
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(Request $request){
            try {
                if(!Auth::guest()){   
                    $user_id = Auth::user()->id;
                }
                else{
                    $user_id = NULL;
                }
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
                $reserva->hora = $hora;
                $reserva->especialidad = $especialidad;
                
                $reserva->save();
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'guardado']);
            } catch (\Exception $e) {
                //report($e);
                return response()->json(['nombrePaciente' => $nombrePaciente, 'estado' => 'error']);
            }
    }
    public function reservas_data(){
        $reservas = ReservaDeCita::select('nombre','telefono','fecha','hora','especialidad')->orderBy('fecha')->get();
        //return response()->json(['reservas' => $reservas]);
        //return $reservas;
        return datatables($reservas)->toJson();
    
}

    public function actualizarCitas(Request $request)
    {
        if(Auth::user()->hasRole(['administrador']) || Auth::user()->hasRole(['secretaria']))
        {
            try {
                $citaid = request('Citaid');
                $hora = request('Hora');
                $fecha = request('Fecha');
    
                $cita = ReservaDeCita::findOrFail($citaid);
                if($fecha!=NULL){
                    $cita->hora = $hora;
                    $cita->fecha = $fecha;
                    $cita->save();
                }
                if($fecha==NULL){
                    $cita->hora = $hora;
                    $cita->save();
                }
                return response()->json(['estado' => 'actualizado']);
            } catch (\Exception $e) {
                //report($e); //report error
                return response()->json(['estado' => 'error']);
            }

        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }

        return redirect('/reserva');
    }

    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
