<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;


class administradorController extends Controller
{
    //
    public function bienvenida() {

        return view('bienvenida');
    }

    public function inicio() {

        return view('inicio');
    }

    private function getData() {

	    $data = array(
            array(
                'id' => '1',
                'name' => 'Cheese pizza',
                'description' => 'Nuestra clasica pizza de queso',
                'img' => '1.jpg'
            ),
            array(
                'id' => '2',
                'name' => 'Pepperoni',
                'description' => 'Queso mozarella, parmesano, pepperoni y oregano',
                'img' => '2.jpg'
            ),
            array(
                'id' => '3',
                'name' => 'Vegetariana',
                'description' => 'Queso mozarella, cebolla, pimiento, champinones, aceitunas',
                'img' => '3.jpg'
            ),
            array(
                'id' => '4',
                'name' => 'Hawaiana',
                'description' => 'Pizza de pi;a y jamon',
                'img' => '4.jpg'
            ),
            array(
                'id' => '1',
                'name' => 'Pepperoni',
                'description' => 'Queso mozarella, parmesano, pepperoni y oregano',
                'img' => '1.jpg'
            ),
            array(
                'id' => '1',
                'name' => 'Pepperoni',
                'description' => 'Queso mozarella, parmesano, pepperoni y oregano',
                'img' => '1.jpg'
            ),
        );

        return $data;
    }

    public function especialidades() {

	    $data = $this->getData();

        return view('especialidades', compact('data'));
    }

    public function menu() {

	    $data = $this->getData();

        return view('menu', compact('data'));
    }

    public function editarEspecialidad($id) {

        $idEspecialidad = $id;

        return view('especialidad', compact('idEspecialidad'));
    }

    public function orden(Request $request) {

        $order = $request;

        return view('orden_modalidad', compact('order'));
    }

    public function reserva(Request $request) {

        $order = array(
            'id' => $request->id,
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo
        );

        return view('reservacion', compact('order'));
    }

    public function domicilio(Request $request) {

        $order = array(
            'id' => $request->id,
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo
        );

        return view('pedido_domicilio', compact('order'));
    }

    public function reservas() {

        return view('reservaciones');
    }

    public function pedidos() {

        return view('pedidos');
    }

    public function verEspecialidad($id) {

        $order = array(
            'platillo' => "$id"
        );

        return view('verEspecialidad', compact('order'));
    }

    public function informacionCompra(Request $request) {

        $data = array();
        $data = $request->all();

        // return view('metodo_pago');

        if($data['tipo'] == 'reserva') {

            return view('compra_reserva', compact('data'));
        }

        return view('compra_domicilio', compact('data'));
    }

    public function pago() {

        return view('metodo_pago');
    }






    public function iniciarSesion(Request $request) {

        if($request->email == "administrador") {

            return view('inicio');
        }

        return redirect('/menu');
    }

    public function registrarUsuario(Request $request) {

        echo $request;

        return redirect('/menu');
    }
}
