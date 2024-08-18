<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class clienteControlador extends Controller
{

    public function orden(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $order = $request;

        return view('orden_modalidad', compact('order'));
    }

    public function reserva(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $order = $request->all();

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

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'platillos/' . $data['id']);

        $platillo = json_decode($response->getBody(), true);

        // return view('metodo_pago');

        if($data['tipo'] == 'reserva') {

            return view('compra_reserva', compact('data', 'platillo'));
        }

        return view('compra_domicilio', compact('data', 'platillo'));
    }

    public function verEspecialidad($id) {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'platillos/' . $id);

        $data = json_decode($response->getBody(), true);

        return view('verEspecialidad', compact('data'));
    }

    public function menu() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'platillos/obtener/todos');

        $data = json_decode($response->getBody(), true);

        return view('menu', compact('data'));
    }
}
