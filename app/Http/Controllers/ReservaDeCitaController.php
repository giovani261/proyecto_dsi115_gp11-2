<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReservaDeCita;
use DB;
use Auth;
use Carbon\Carbon;

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
    
    public function graficos(){

        if(Auth::user()->hasRole(['administrador'])){
            //Obtener fecha del día
            $date = Carbon::now()->timezone('America/El_Salvador');
            $date = $date->format('Y-m-d');

            //Citas para el día de hoy
            $citas = ReservaDeCita::whereDate('fecha','=',$date)->orderBy('hora')->get();

            //Cantidad de citas a partir de hoy
            $horaAsignada = ReservaDeCita::select('hora')->whereNotNull('hora')->whereDate('fecha','>=', $date)->get()->count();
            $horaPendiente = ReservaDeCita::select('hora')->whereNull('hora')->whereDate('fecha','>=', $date)->get()->count();
            $citasCantidad = ReservaDeCita::select('id')->where('fecha','>=',$date)->get()->count();

            //Cantidad de citas de hoy
            $todayWithoutTime = ReservaDeCita::select('hora')->whereNull('hora')->whereDate('fecha','=',$date)->get()->count();
            $todayWithTime = ReservaDeCita::select('hora')->whereNull('hora')->whereDate('fecha','=',$date)->get()->count();
            $todayAll=ReservaDeCita::select('id')->where('fecha','=',$date)->get()->count();

            //últimas cinco citas registradas - nombre, fecha y hora
            $illnesCommun = ReservaDeCita::select('especialidad',DB::raw('COUNT ("especialidad")'))->groupBy('especialidad')->orderBy('count','desc')->limit(1)->get();
            ///variables para cuando no hay datos en la bd
            $illnesCommunCount = 0;
            $illnesCommunName = "No hay datos";
            foreach ($illnesCommun as $illnessCommunVal) {
                $illnesCommunCount = $illnessCommunVal->count;
                $illnesCommunName = $illnessCommunVal->{"especialidad"};
            }

            //Fecha con más citas
            $dateCommun = ReservaDeCita::select('fecha',DB::raw('COUNT ("fecha")'))->groupBy('fecha')->orderBy('count','desc')->limit(1)->get();
            ///variables para cuando no hay datos en la bd
            $dateCommunCount = 0;
            $dateCommunName = "No hay datos";
            foreach ($dateCommun as $dateCommunVal) {
                $dateCommunCount = $dateCommunVal->count;
                $dateCommunName = $dateCommunVal->{"fecha"};
            }

            //Gráfica de enfermedades
            $colitis=ReservaDeCita::select('especialidad')->where('especialidad','=','colitis')->get()->count();
            $estreñimiento=ReservaDeCita::select('especialidad')->where('especialidad','=','estreñimiento')->get()->count();
            $cancer=ReservaDeCita::select('especialidad')->where('especialidad','=','cancer')->get()->count();
            $hemorroides=ReservaDeCita::select('especialidad')->where('especialidad','=','hemorroides')->get()->count();
            $higado=ReservaDeCita::select('especialidad')->where('especialidad','=','higado')->get()->count();
            $reflujo=ReservaDeCita::select('especialidad')->where('especialidad','=','reflujo')->get()->count();
            $gastritis=ReservaDeCita::select('especialidad')->where('especialidad','=','gastritis')->get()->count();
            $grafico1Data1 = [$colitis];
            $grafico1Data2 = [$estreñimiento];
            $grafico1Data3 = [$cancer];
            $grafico1Data4 = [$hemorroides];
            $grafico1Data5 = [$higado];
            $grafico1Data6 = [$reflujo];
            $grafico1Data7 = [$gastritis];
            
            return view('citasInforme',['citas' => $citas,'dateCommunCount' => $dateCommunCount, 'dateCommunName' => $dateCommunName,'illnesCommunCount' => $illnesCommunCount, 'illnesCommunName' => $illnesCommunName, 'todayAll' => $todayAll,'todayWithTime' => $todayWithTime,'todayWithoutTime' => $todayWithoutTime,'horaAsignada' => $horaAsignada, 'horaPendiente' => $horaPendiente, 'citasCantidad' => $citasCantidad, 'grafico1Data1' => $grafico1Data1, 'grafico1Data2' => $grafico1Data2,'grafico1Data3' => $grafico1Data3,'grafico1Data4' => $grafico1Data4,'grafico1Data5' => $grafico1Data5,'grafico1Data6' => $grafico1Data6,'grafico1Data7' => $grafico1Data7, 'dateNow' => $date]);
        }
        else{
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se ha cerrado su sesion');
        }
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
