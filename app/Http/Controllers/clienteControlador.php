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

    public function pago(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $data = $request->all();

        return view('metodo_pago', compact('data'));
    }

    public function informacionCompra(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $info = $request->all();

        $array = array('cliente' => session()->get("user"));
        $data = array_merge($info, $array);

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

    public function compraRealizada(Request $request) {

        $data = $request->all();

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);

        $response = $client->request('POST', 'ordenes/crear/orden',[
                'body' => json_encode([
                    'usuario' => array('idUsuario' => session()->get("userId")),
                    'status' => 'Pendiente'
                ])
        ]);
        $order = json_decode($response->getBody(), true);

        $response = $client->request('POST', 'facturas/crear/factura',[
                'body' => json_encode([
                    'orden' => array('idOrden' => $order['idOrden']),
                    'isv' => str_replace('Lps', '', $data['isv']),
                    'total' => str_replace('Lps', '', $data['total'])
                ])
        ]);

        $response = $client->request('POST', 'ordenes-platillos/crear?idOrden=' . $order['idOrden'] . '&idPlatillo=' . $data['id']. '&cantidad=' . $data['cantidad']);

        if($data['tipo'] === 'pedido') {

            $response = $client->request('POST', 'pedidos/crear',[
                    'body' => json_encode([
                        'orden' => array('idOrden' => $order['idOrden']),
                        'direccion' => $data['direccion'],
                        'precioenvio' => str_replace('Lps','',$data['precio_envio'])
                    ])
            ]);
        } else {

            $timestamp = strtotime($data['fecha'] . ' ' . $data['hora']);
            $response = $client->request('POST', 'reservaciones/crear/reservacion',[
                    'body' => json_encode([
                        'fechaInicio' => $timestamp,
                        'mesa' => array('codigoMesa' => $data['mesa']),
                        'orden' => array('idOrden' => $order['idOrden'])
                    ])
            ]);
        }

        return view('compraRealizada');
    }
}
