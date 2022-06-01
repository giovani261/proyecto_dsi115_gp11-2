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
use App\Http\Controllers\IncapacidadController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CKEditorrecetaController ;
use App\Http\Controllers\MedicamentoController;

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
Route::match(['get'],'/exprecetaconsultarajax',[ExpedienteController::class,'consultarajax'])->name('exprecetaconsultarajax');

Route::match(['post'],'/reserva', [ReservaDeCitaController::class,'registro'])->name('reserva');
Route::match(['post'],'/incapacidad', [IncapacidadController::class,'registro'])->name('incapacidad');
Route::match(['get','post'],'/editor', [CKEditorController::class,'editor'])->name('editor');
Route::match(['get','post'],'/editorreceta', [CKEditorrecetaController ::class,'editor'])->name('editorreceta');

// Route::match(['get', 'post'], '/db', function () {
//     //consulta
//     $sql = 'SELECT * FROM products';
//     $products = DB::select($sql);
//     Alert::success('Success Title', 'Productos obtenidos de la bd correctamente');
//     return $products;
// })->name('db');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roles', [DashboardController::class, 'roles'])->name('roles');

Route::get('/reserva',[ReservaDeCitaController::class,'index'])->name('index');

Route::match(['post'], '/crear-referencia', [ReferenciaController::class, 'guardar_referencia_medica'])->name('crear_referencia');
Route::get('/editar_referencia', [ReferenciaController::class, 'editar_referencia'])->name('editar_referencia');
