<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\administradorControlador;
use App\Http\Controllers\clienteControlador;
use App\Http\Controllers\Controlador;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [Controlador::class, 'bienvenida'])->name('bienvenida');

Route::get('/login', [Controlador::class, 'iniciarSesion'])->name('iniciar.sesion');

Route::post('/registro', [Controlador::class, 'registrarUsuario'])->name('registrar.usuario');




Route::get('/administracion/inicio', [administradorControlador::class, 'inicio'])->name('inicio');

Route::get('/administracion/especialidades/', [administradorControlador::class, 'especialidades'])->name('especialidades');

Route::get('/administracion/especialidad/{id}', [administradorControlador::class, 'editarEspecialidad'])->name('editar.especialidad');

Route::get('/administracion/reservas', [administradorControlador::class, 'reservas'])->name('ver.reservas');

Route::get('/administracion/pedidos', [administradorControlador::class, 'pedidos'])->name('ver.pedidos');

Route::get('/administracion/inventario', [administradorControlador::class, 'verInventario'])->name('ver.inventario');

Route::get('/administracion/inventario/crearIngrediente', [administradorControlador::class, 'crearIngrediente'])->name('crear.ingrediente');

Route::get('/administracion/inventario/crearIngrediente/guardar', [administradorControlador::class, 'guardarIngrediente'])->name('guardar.ingrediente');

Route::get('/administracion/inventario/pedido/{id}', [administradorControlador::class, 'pedidoProveedor'])->name('crear.pedido');

Route::get('/administracion/inventario/pedido/{id}/guardar', [administradorControlador::class, 'confirmarPedidoProveedor'])->name('confirmar.pedido');

Route::get('/administracion/especialidades/eliminar/{id}', [administradorControlador::class, 'eliminarPlatillo'])->name('eliminar.platillo');

Route::get('/administracion/especialidades/crear', [administradorControlador::class, 'crearPlatillo'])->name('crear.platillo');

Route::get('/administracion/especialidades/crear/guardar', [administradorControlador::class, 'guardarPlatillo'])->name('guardar.platillo');

Route::get('/administracion/especialidades/actualizar', [administradorControlador::class, 'actualizarPlatillo'])->name('actualizar.platillo');

Route::get('/administracion/usuarios', [administradorControlador::class, 'verUsuarios'])->name('ver.usuarios');

Route::get('/administracion/usuarios/{id}', [administradorControlador::class, 'verUsuario'])->name('ver.usuario');

Route::get('/administracion/usuarios/{id}/actualizar', [administradorControlador::class, 'actualizarUsuario'])->name('actualizar.usuario');

Route::get('/administracion/facturas', [administradorControlador::class, 'verFacturas'])->name('ver.facturas');

Route::get('/administracion/facturas/{id}', [administradorControlador::class, 'verFactura'])->name('ver.factura');

Route::get('/administracion/usuarios/{id}/eliminar', [administradorControlador::class, 'eliminarUsuario'])->name('eliminar.usuario');

Route::get('/administracion/ordenes/confirmar/{id}', [administradorControlador::class, 'confirmarOrden'])->name('confirmar.orden');






Route::get('/orden', [clienteControlador::class, 'orden'])->name('crear.orden');

Route::get('/orden/reserva', [clienteControlador::class, 'reserva'])->name('reserva');

Route::get('/orden/domicilio', [clienteControlador::class, 'domicilio'])->name('pedir.domicilio');
Route::get('/menu', [clienteControlador::class, 'menu'])->name('menu');

Route::get('/pago', [clienteControlador::class, 'pago'])->name('metodo.pago');

Route::get('/compra', [clienteControlador::class, 'informacionCompra'])->name('ver.compra');

Route::get('/especialidad/{id}', [clienteControlador::class, 'verEspecialidad'])->name('ver.especialidad');

Route::get('/compra/realizada', [clienteControlador::class, 'compraRealizada'])->name('compra.realizada');