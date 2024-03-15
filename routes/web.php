<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaquinasController;
use App\Http\Controllers\VehiculosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/formularioVehiculos', [VehiculosController::class, "formularioVehiculos"])
    ->name('formularioVehiculos');
Route::get('/listaVehiculos', [VehiculosController::class, "listaVehiculos"])
    ->name('listaVehiculos');
Route::get('/excluirVehiculo', [VehiculosController::class, "excluirVehiculo"])
    ->name('excluirVehiculo');
Route::get('/formularioVehiculosEditar', [VehiculosController::class, "formularioVehiculosEditar"])
    ->name('formularioVehiculosEditar');
Route::get('/formularioVehiculosEditar', [VehiculosController::class, "formularioVehiculosEditar"])
    ->name('formularioVehiculosEditar');
Route::post('/editarVehiculos', [VehiculosController::class, "editarVehiculo"])
    ->name('editarVehiculos');
Route::post('/criarVehiculo', [VehiculosController::class, "criarVehiculo"])
    ->name('criarVehiculo');


Route::get('/formularioMaquinas', [MaquinasController::class, "formularioMaquinas"])
    ->name('formularioMaquinas');
Route::get('/listaMaquinas', [MaquinasController::class, "listaMaquinas"])
    ->name('listaMaquinas');
Route::get('/excluirMaquina', [MaquinasController::class, "excluirMaquina"])
    ->name('excluirMaquina');
Route::get('/formularioMaquinasEditar', [MaquinasController::class, "formularioMaquinasEditar"])
    ->name('formularioMaquinasEditar');
Route::get('/formularioMaquinasEditar', [MaquinasController::class, "formularioMaquinasEditar"])
    ->name('formularioMaquinasEditar');
Route::post('/editarMaquinas', [MaquinasController::class, "editarMaquina"])
    ->name('editarMaquinas');
Route::post('/criarMaquina', [MaquinasController::class, "criarMaquina"])
    ->name('criarMaquina');



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


