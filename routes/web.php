<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\ProfesionController;
use App\Http\Controllers\EmpleadoController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%  clientes %%%%%%%%%%%%%%%%%%%%%%%%%%*/
Route::get('clientes',[ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/listar',[ClienteController::class, 'listar'])->name('clientes.listar');
Route::get('cliente/create',[ClienteController::class, 'crear'])->name('cliente.create');
Route::post('cliente/store',[ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/editar/{cliente}',[ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/actualizar/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('cliente/mostrar/{cliente}',[ClienteController::class, 'show'])->name('cliente.show');
Route::delete('cliente/eliminar',[ClienteController::class, 'destroy'])->name('cliente.destroy');

/** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%  turnos %%%%%%%%%%%%%%%%%%%%%%%%%%*/
Route::get('turnos',[TurnoController::class, 'index'])->name('turnos.index');
Route::get('turnos/listar',[TurnoController::class, 'listar'])->name('turnos.listar');
Route::get('turno/create',[TurnoController::class, 'crear'])->name('turno.create');
Route::post('turno/store',[TurnoController::class, 'store'])->name('turno.store');
Route::get('turno/editar/{turno}',[TurnoController::class, 'edit'])->name('turno.edit');
Route::put('turno/actualizar/{turno}', [TurnoController::class, 'update'])->name('turno.update');
Route::get('turno/mostrar/{turno}',[TurnoController::class, 'show'])->name('turno.show');
Route::delete('turno/eliminar',[TurnoController::class, 'destroy'])->name('turno.destroy');

/** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%  profesion %%%%%%%%%%%%%%%%%%%%%%%%%%*/
Route::get('profesions',[ProfesionController::class, 'index'])->name('profesions.index');
Route::get('profesions/listar',[ProfesionController::class, 'listar'])->name('profesions.listar');
Route::get('profesion/create',[ProfesionController::class, 'crear'])->name('profesion.create');
Route::post('profesion/store',[ProfesionController::class, 'store'])->name('profesion.store');
Route::get('profesion/editar/{profesion}',[ProfesionController::class, 'edit'])->name('profesion.edit');
Route::put('profesion/actualizar/{profesion}', [ProfesionController::class, 'update'])->name('profesion.update');
Route::get('profesion/mostrar/{profesion}',[ProfesionController::class, 'show'])->name('profesion.show');
Route::delete('profesion/eliminar',[ProfesionController::class, 'destroy'])->name('profesion.destroy');

/** %%%%%%%%%%%%%%%%%%%%%%%%%%%%%  EMPLEADO %%%%%%%%%%%%%%%%%%%%%%%%%%*/
Route::get('empleados',[EmpleadoController::class, 'index'])->name('empleados.index');

Route::get('empleados/listar',[EmpleadoController::class, 'listar'])->name('empleados.listar');

Route::get('empleado/create',[EmpleadoController::class, 'crear'])->name('empleado.create');
Route::post('empleado/store',[EmpleadoController::class, 'store'])->name('empleado.store');
Route::get('empleado/editar/{empleado}',[EmpleadoController::class, 'edit'])->name('empleado.edit');
Route::put('empleado/actualizar/{empleado}', [EmpleadoController::class, 'update'])->name('empleado.update');
Route::get('empleado/mostrar/{empleado}',[EmpleadoController::class, 'show'])->name('empleado.show');
Route::delete('empleado/eliminar',[EmpleadoController::class, 'destroy'])->name('empleado.destroy');


Route::get('getcliente',[ClienteController::class, 'getCliente'])->name('get.cliente');
Route::get('editarcliente/{cliente}',[ClienteController::class, 'editarCliente'])->name('editar.cliente');






//crear ruta 
// crear metodo en el controlador
// crear a con una clase editar 
// escuchar el evento click en el index 
// conseguir el id del tr clicado 
 

