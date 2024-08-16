<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteControlador extends Controller
{

    public function orden(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $order = $request;

        return view('orden_modalidad', compact('order'));
    }

    public function reserva(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $order = array(
            'id' => $request->id,
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo
        );

        return view('reservacion', compact('order'));
    }


    public function domicilio(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $order = array(
            'id' => $request->id,
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo
        );

        return view('pedido_domicilio', compact('order'));
    }

    public function pago() {

        if(session()->get('user') === null) return redirect('/');

        return view('metodo_pago');
    }

    public function informacionCompra(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $data = array();
        $data = $request->all();

        // return view('metodo_pago');

        if($data['tipo'] == 'reserva') {

            return view('compra_reserva', compact('data'));
        }

        return view('compra_domicilio', compact('data'));
    }

    public function verEspecialidad($id) {

        if(session()->get('user') === null) return redirect('/');

        $order = array(
            'platillo' => "$id"
        );

        return view('verEspecialidad', compact('order'));
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

    public function menu() {

        if(session()->get('user') === null) return redirect('/');

	    $data = $this->getData();

        return view('menu', compact('data'));
    }
}
