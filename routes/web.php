<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignosController;
use App\Http\Controllers\ReferenciaController;
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

Route::get('crear-referencia', [ReferenciaController::class, 'index']);
Route::get('editar_referencia', [ReferenciaController::class, 'editar_referencia']);
