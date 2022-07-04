<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\ReservaDeCita;
use Auth;
use Carbon\Carbon;
use App\Models\Historial;
use App\Models\MedicamentosPrescritos;
use App\Models\Medicamento;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){
        if(Auth::user()->hasRole(['administrador']))
        {
            $date = Carbon::now()->timezone('America/El_Salvador');
            $date = $date->format('Y-m-d');
            $citas = ReservaDeCita::whereDate('fecha','=',$date)->orderBy('hora')->get();
            //dd($date);
            $enfermedadMasComun = Historial::select('enfermedad actual',DB::raw('COUNT ("enfermedad actual")'))->groupBy('enfermedad actual')->orderBy('count','desc')->limit(1)->get();
            ///variables para cuando no hay datos en la bd
            $enfermedadMasComunCount = 0;
            $enfermedadMasComunName = "No hay datos";
            $medicamentoPrescritoMasComunName = "No hay datos";
            $medicamentoPrescritoMasComunIdCount = 0;

            foreach ($enfermedadMasComun as $enfermedadMasComunVal) {
                $enfermedadMasComunCount = $enfermedadMasComunVal->count;
                $enfermedadMasComunName = $enfermedadMasComunVal->{"enfermedad actual"};
            }
            $historialesCount = Historial::all()->count();
            $idadmin = DB::table('roles')->selectRaw('id')->where('name','=','administrador')->get();
            $idsecretaria = DB::table('roles')->selectRaw('id')->where('name','=','secretaria')->get();
            $idasistente = DB::table('roles')->selectRaw('id')->where('name','=','asistente')->get();
            foreach ($idadmin as $idadminval) {
                $valadminid = $idadminval->id;
            }
            foreach ($idsecretaria as $idsecretariaval) {
                $valsecretariaid = $idsecretariaval->id;
            }
            foreach ($idasistente as $idasistenteval) {
                $valasistenteid = $idasistenteval->id;
            }
            $adminCount = DB::table('model_has_roles')->selectRaw('COUNT(*)')->where('role_id','=',$valadminid)->get();
            $secretariaCount = DB::table('model_has_roles')->selectRaw('COUNT(*)')->where('role_id','=',$valsecretariaid)->get();
            $asistenteCount = DB::table('model_has_roles')->selectRaw('COUNT(*)')->where('role_id','=',$valasistenteid)->get();
            foreach ($adminCount as $adminCountVal) {
                $countRoleAdmin = $adminCountVal->count;
            }
            foreach ($secretariaCount as $secretariaCountVal) {
                $countRoleSecretaria = $secretariaCountVal->count;
            }
            foreach ($asistenteCount as $asistenteCountVal) {
                $countRoleAsistente = $asistenteCountVal->count;
            }
            $totalCountRoles = $countRoleAdmin+$countRoleSecretaria+$countRoleAsistente;
            $horaCitasAsignada = ReservaDeCita::select('hora')->whereNotNull('hora')->whereDate('fecha','>=', $date)->get()->count();
            $horaCitasPendiente = ReservaDeCita::select('hora')->whereNull('hora')->whereDate('fecha','>=', $date)->get()->count();
            $grafico1Data1 = [$horaCitasPendiente];
            $grafico1Data2 = [$horaCitasAsignada];
            //dd($grafico1Data); //data de grafico
            $medicamentoPrescritoMasComunIdSelect = MedicamentosPrescritos::select('medicamento_id',DB::raw('COUNT ("medicamento_id")'))->groupBy('medicamento_id')->orderBy('count','desc')->limit(1)->get();
            foreach ($medicamentoPrescritoMasComunIdSelect as $medicamentoPrescritoMasComunIdVal) {
                $medicamentoPrescritoMasComunIdCount = $medicamentoPrescritoMasComunIdVal->count;
                $medicamentoPrescritoMasComunId = $medicamentoPrescritoMasComunIdVal->{"medicamento_id"};
            }
            if($medicamentoPrescritoMasComunIdSelect->isEmpty()){
                $medicamentoPrescritoMasComunId = 0; //bypass para cuando no hay datos en la bd
            }
            $medicamentoPrescritoMasComun = Medicamento::select('nombre')->where('id','=',$medicamentoPrescritoMasComunId)->get();
            foreach ($medicamentoPrescritoMasComun as $medicamentoPrescritoMasComunVal) {
                $medicamentoPrescritoMasComunName = $medicamentoPrescritoMasComunVal->nombre;
            }
            $medicamentosPrescritosCount = MedicamentosPrescritos::all()->count();
            return view('dashboard', ['citas' => $citas, 'enfermedadMasComunCount' => $enfermedadMasComunCount, 'enfermedadMasComunName' => $enfermedadMasComunName, 'historialesCount' => $historialesCount, 'countRoleAdmin' => $countRoleAdmin, 'countRoleSecretaria' => $countRoleSecretaria, 'countRoleAsistente' => $countRoleAsistente, 'totalCountRoles' => $totalCountRoles, 'grafico1Data1' => $grafico1Data1, 'grafico1Data2' => $grafico1Data2, 'dateNow' => $date, 'medicamentoPrescritoMasComunName' => $medicamentoPrescritoMasComunName, 'medicamentoPrescritoMasComunCount' => $medicamentoPrescritoMasComunIdCount, 'medicamentosPrescritosCount' => $medicamentosPrescritosCount]);

        }
        else {
            Auth::logout();
            //$request->session()->invalidate();
            return redirect('/login')->withErrors('Usted a intentado acceder a una pagina a la que no tiene permiso, se a cerrado su sesion');
        }
        
    }

    public function roles(){
        //creacion rol de admin
        //$role_admin = Role::create(['name' => 'administrador']);
        //$permission_admin = Permission::create(['name' => 'acceso total']);
        //$role_admin->givePermissionTo($permission_admin);
        //User::find(1)->givePermissionTo('acceso total');
        //User::find(1)->assignRole('administrador');
        //dd(User::find(1)->can('acceso total'));
        //creacion rol de secretaria
        //$role_secretaria = Role::create(['name' => 'secretaria']);
        // $permission_secretaria = Permission::create(['name' => 'agendar citas', 'name' => 'gestion de insumos', 'name' => 'gestion de medicamentos']);
        // $role_secretaria->givePermissionTo($permission_secretaria);
        //User::find(3)->assignRole('secretaria');
        //creacion rol de asistente
        //$role_asistente = Role::create(['name' => 'asistente']);
        //User::find(4)->assignRole('asistente');
        //Rol para miguel User::find(2)->assignRole('administrador');
        //Rol para jen User::find(5)->assignRole('administrador');
        //Rol para bryan User::find(6)->assignRole('administrador');
        /*Rol para kath*/ 
        //User::find(7)->assignRole('administrador');
        /*Rol para gabriela*/ 
        //User::find(8)->assignRole('administrador');
        //return "hecho";
    }
}
