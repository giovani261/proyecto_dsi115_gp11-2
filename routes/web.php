<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignosController;
<<<<<<< HEAD
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\ExpedienteController;
=======
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\IncapacidadController;
>>>>>>> 705a12035394079f14649d955eaf8650d9ee0b27
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
<<<<<<< HEAD

Route::match(['post'],'/signos',[SignosController::class,'signos'])->name('signos');
Route::match(['post'],'/historial',[HistorialController::class,'registro'])->name('historial');
Route::match(['post'],'/expediente',[ExpedienteController::class,'registro'])->name('expediente');
=======
Route::match(['post'],'/signos',[SignosController::class,'signos'])->name('signos');
Route::match(['get','post'],'/agenda', [AgendaController::class,'show'])->name('agenda');
Route::match(['get','post'],'/incapacidad', [IncapacidadController::class,'show'])->name('incapacidad');

>>>>>>> 705a12035394079f14649d955eaf8650d9ee0b27

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
