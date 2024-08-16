<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use Config;


class administradorControlador extends Controller
{
    //
    public function inicio() {

        if(session()->get('user') === null) return redirect('/');

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

        if(session()->get('user') === null) return redirect('/');

	    $data = $this->getData();

        return view('especialidades', compact('data'));
    }

    public function editarEspecialidad($id) {

        if(session()->get('user') === null) return redirect('/');

        $idEspecialidad = $id;

        $data = $this->obtenerIngredientes();

        return view('especialidad', compact('idEspecialidad', 'data'));
    }

    public function reservas() {

        if(session()->get('user') === null) return redirect('/');

        return view('reservaciones');
    }

    public function pedidos() {

        if(session()->get('user') === null) return redirect('/');

        return view('pedidos');
    }

    private function obtenerIngredientes() {

	    $data = array(
            array(
                'id' => '1',
                'name' => 'Sal',
                'unit' => 'Gramos',
            ),
            array(
                'id' => '2',
                'name' => 'Agua',
                'unit' => 'Litros',
            ),
            array(
                'id' => '3',
                'name' => 'Azucar',
                'unit' => 'Gramos',
            ),
            array(
                'id' => '4',
                'name' => 'Salsa',
                'unit' => 'Gramos',
            ),

        );

        return $data;

    }

    public function crearPlatillo() {

        if(session()->get('user') === null) return redirect('/');

        $data = $this->obtenerIngredientes();

        return view('crearPlatillo', compact('data'));
    }

    public function guardarPlatillo(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        print_r($request->all());
    }

    public function verInventario() {

        if(session()->get('user') === null) return redirect('/');

        return view('inventario');
    }

}
