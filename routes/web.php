<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\administradorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/administracion/inicio', [administradorController::class, 'inicio'])->name('inicio');

Route::get('/login', [administradorController::class, 'iniciarSesion'])->name('iniciar.sesion');

Route::get('/', [administradorController::class, 'bienvenida'])->name('bienvenida');

Route::post('/registro', [administradorController::class, 'registrarUsuario'])->name('registrar.usuario');

Route::get('/administracion/especialidades/', [administradorController::class, 'especialidades'])->name('especialidades');

Route::get('/administracion/especialidad/{id}', [administradorController::class, 'editarEspecialidad'])->name('editar.especialidad');

Route::get('/especialidad/{id}', [administradorController::class, 'verEspecialidad'])->name('ver.especialidad');

Route::get('/orden', [administradorController::class, 'orden'])->name('crear.orden');

Route::get('/orden/reserva', [administradorController::class, 'reserva'])->name('reserva');

Route::get('/orden/domicilio', [administradorController::class, 'domicilio'])->name('pedir.domicilio');

Route::get('/administracion/reservas', [administradorController::class, 'reservas'])->name('ver.reservas');

Route::get('/administracion/pedidos', [administradorController::class, 'pedidos'])->name('ver.pedidos');

Route::get('/menu', [administradorController::class, 'menu'])->name('menu');

Route::get('/pago', [administradorController::class, 'pago'])->name('metodo.pago');

Route::get('/compra', [administradorController::class, 'informacionCompra'])->name('ver.compra');