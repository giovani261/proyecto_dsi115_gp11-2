<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignosController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\ReferenciaController;
use App\Http\Controllers\ReservaDeCitaController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\IncapacidadController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CKEditorrecetaController ;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\InsumoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::match(['get','post'],'/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::match(['post'],'/signos',[SignosController::class,'signos'])->name('signos');
Route::match(['post'],'/receta', [RecetaController::class,'registro'])->name('receta');
Route::match(['post'],'/historial',[HistorialController::class,'registro'])->name('historial');
Route::match(['post'],'/expediente',[ExpedienteController::class,'registro'])->name('expediente');
Route::match(['get'],'/expedienteconsultarajax',[ExpedienteController::class,'consultarajax'])->name('expedienteconsultarajax');

Route::match(['get'],'/medicamentoconsultarajax',[MedicamentoController::class,'consultarmedicamentoajax'])->name('medicamentoconsultarajax');
Route::match(['get'],'/insumoajax',[InsumoController::class,'consultarinsumoajax'])->name('insumoajax');
Route::match(['get'],'/exprecetaconsultarajax',[ExpedienteController::class,'consultarajax'])->name('exprecetaconsultarajax');

Route::match(['post'],'/reserva', [ReservaDeCitaController::class,'registro'])->name('reserva');

Route::match(['post'],'/usuarios', [UsuariosController::class,'registro'])->name('usuarios');

Route::match(['post'],'/incapacidad', [IncapacidadController::class,'registro'])->name('incapacidad');
Route::match(['get','post'],'/editor', [CKEditorController::class,'editor'])->name('editor');
Route::match(['post'],'/historialconsultarajax', [HistorialController::class,'consultarhistorial'])->name('historialconsultarajax');
Route::match(['post'],'/citasactualizarajax', [ReservaDeCitaController::class,'actualizarCitas'])->name('citasactualizarajax');
Route::match(['get','post'],'/editorreceta', [CKEditorrecetaController ::class,'editor'])->name('editorreceta');
Route::match(['get'],'/pacientes-informe',[ExpedienteController::class,'index'])->name('pacientes-informe');


// Route::match(['get', 'post'], '/db', function () {
//     //consulta
//     $sql = 'SELECT * FROM products';
//     $products = DB::select($sql);
//     Alert::success('Success Title', 'Productos obtenidos de la bd correctamente');
//     return $products;
// })->name('db');

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roles', [DashboardController::class, 'roles'])->name('roles');
Route::get('/reserva',[ReservaDeCitaController::class,'index'])->middleware('auth')->name('index');
Route::get('/usuarios',[UsuariosController::class,'index'])->middleware('auth')->name('index');

Route::match(['post'], '/crear-referencia', [ReferenciaController::class, 'guardar_referencia_medica'])->name('crear_referencia');
Route::get('/editar_referencia', [ReferenciaController::class, 'editar_referencia'])->name('editar_referencia');

Route::get('reservas_data',[ReservaDeCitaController::class,'reservas_data'])->name('reservas_data');

Route::get('usuarios_data',[UsuariosController::class,'usuarios_data'])->middleware('auth')->name('usuarios_data');


Route::get('/informes', function () {
    return view('informe');
})->middleware('auth');
Route::get('/signos-informes', function () {
    return view('signosInforme');
})->middleware('auth');
Route::get('signos_informes',[SignosController::class,'signos_informes'])->middleware('auth')->name('signos_informes');
Route::get('/consultarusuariosajax',[UsuariosController::class,'consultarUsuarios'])->middleware('auth')->name('consultarusuariosajax');
Route::post('/editar_usuario',[UsuariosController::class,'update'])->middleware('auth')->name('editar_usuario');
Route::post('/crear_usuario',[UsuariosController::class,'create'])->middleware('auth')->name('crear_usuario');
Route::post('/eliminar_usuario',[UsuariosController::class,'destroy'])->middleware('auth')->name('eliminar_usuario');

Route::get('signos_informes',[SignosController::class,'signos_informes'])->middleware('auth')->name('signos_informes');
Route::get('/consultarproveedoresajax',[ProveedoresController::class,'consultarProveedores'])->middleware('auth')->name('consultarproveedoresajax');
Route::post('/editar_proveedor',[ProveedoresController::class,'update'])->middleware('auth')->name('editar_proveedor');
Route::post('/crear_proveedor',[ProveedoresController::class,'create'])->middleware('auth')->name('crear_proveedor');
Route::post('/eliminar_proveedor',[ProveedoresController::class,'destroy'])->middleware('auth')->name('eliminar_proveedor');

Route::get('/medicamentos',[MedicamentoController::class,'index'])->middleware('auth')->name('index');
Route::get('medicamentos_data',[MedicamentoController::class,'medicamentos_data'])->middleware('auth')->name('medicamentos_data');
Route::get('/consultarmedicamento',[MedicamentoController::class,'consultarMedicamento'])->middleware('auth')->name('consultarmedicamento');
Route::post('/editar_medicamento',[MedicamentoController::class,'update'])->middleware('auth')->name('editar_medicamento');
Route::post('/crear_medicamento',[MedicamentoController::class,'create'])->middleware('auth')->name('crear_medicamento');
Route::post('/eliminar_medicamento',[MedicamentoController::class,'destroy'])->middleware('auth')->name('eliminar_medicamento');

Route::get('/insumos',[InsumoController::class,'index'])->middleware('auth')->name('index');
Route::get('insumos_data',[InsumoController::class,'insumos_data'])->middleware('auth')->name('insumos_data');
Route::get('/consultarinsumo',[InsumoController::class,'consultarInsumo'])->middleware('auth')->name('consultarinsumo');
Route::post('/editar_insumo',[InsumoController::class,'update'])->middleware('auth')->name('editar_insumo');
Route::post('/crear_insumo',[InsumoController::class,'create'])->middleware('auth')->name('crear_insumo');
//Route::post('/eliminar_insumo',[InsumoController::class,'destroy'])->middleware('auth')->name('eliminar_insumo');
//<<<<<<< main(1)
Route::get('/proveedores',[ProveedoresController::class,'index'])->middleware('auth')->name('proveedores');
Route::get('/proveedores_data',[ProveedoresController::class,'proveedores_data'])->middleware('auth')->name('proveedores_data');
Route::post('/proveedores',[ProveedoresController::class,'store'])->middleware('auth')->name('store_proveedor');
Route::put('/proveedores/{proveedor}',[ProveedoresController::class,'proveedores_data'])->middleware('auth')->name('update_proveedor');
=======
//Route::get('/pacienteconsulta',[ExpedienteController::class,'pacienteajax'])->middleware('auth')->name('pacienteconsulta');
//>>>>>>> main
