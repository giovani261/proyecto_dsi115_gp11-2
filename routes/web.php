<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignosController;
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

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::match(['get'],'/db',[DashboardController::class,'db'])->name('db');

Route::match(['get', 'post'],'/signos',[SignosController::class,'signos'])->name('signos');

// Route::match(['get', 'post'], '/db', function () {
//     //consulta
//     $sql = 'SELECT * FROM products';
//     $products = DB::select($sql);
//     Alert::success('Success Title', 'Productos obtenidos de la bd correctamente');
//     return $products;
// })->name('db');
