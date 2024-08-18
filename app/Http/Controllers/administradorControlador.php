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

    public function especialidades() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'platillos/obtener/todos');

        $data = json_decode($response->getBody(), true);

        return view('especialidades', compact('data'));
    }

    public function editarEspecialidad($id) {

        if(session()->get('user') === null) return redirect('/');

        $data = $this->obtenerIngredientes();

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'platillos/' . $id);

        $platillo = json_decode($response->getBody(), true);

        return view('especialidad', compact('data', 'platillo'));
    }

    public function reservas() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'reservaciones/obtener/todos');
        $reservaciones = json_decode($response->getBody(), true);

        return view('reservaciones', compact('reservaciones'));
    }

    public function pedidos() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'pedidos/obtener/todos');
        $pedidos = json_decode($response->getBody(), true);

        return view('pedidos', compact('pedidos'));
    }

    private function obtenerIngredientes() {

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'ingredientes/obtener/todos');

        $ingredients = json_decode($response->getBody(), true);

        return $ingredients;
    }

    public function crearPlatillo() {

        if(session()->get('user') === null) return redirect('/');

        $data = $this->obtenerIngredientes();

        return view('crearPlatillo', compact('data'));
    }

    public function guardarPlatillo(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $data = $request->all();

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('POST', 'platillos/crear/platillo',[
                'body' => json_encode([
                    'nombre' => $data['nombre'],
                    'descripcion' => $data['descripcion'],
                    'precio' => $data['precio'],
                    'disponible' => 'V',
                    'img' => $data['img'],
                ])
        ]);
        return redirect('/administracion/especialidades');
    }

    public function actualizarPlatillo(Request $request) {

        if(session()->get('user') === null) return redirect('/');

        $data = $request->all();

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('PUT', 'platillos/actualizar/' . $data['id'] ,[
                'body' => json_encode([
                    'nombre' => $data['nombre'],
                    'descripcion' => $data['descripcion'],
                    'precio' => $data['precio'],
                    'disponible' => 'V',
                    'img' => $data['img'],
                ])
        ]);
        return redirect('/administracion/especialidades');
    }


    public function verInventario() {

        if(session()->get('user') === null) return redirect('/');

        $ingredients = $this->obtenerIngredientes();

        return view('inventario', compact('ingredients'));
    }

    public function verUsuarios() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'usuarios/obtener/todos');

        $users = json_decode($response->getBody(), true);

        return view('usuarios', compact('users'));
    }

    public function verUsuario($id) {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'usuarios/' . $id);

        $user = json_decode($response->getBody(), true);

        return view('usuario', compact('user'));
    }

    public function actualizarUsuario($id) {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('PUT', 'usuarios/editar/' . $id);

        return redirect("/administracion/usuarios");
    }

    public function verFacturas() {

        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'facturas/obtener/todas');
        $facturas = json_decode($response->getBody(), true);

        return view('factura', compact('facturas'));
    }

    public function eliminarPlatillo($id) {
        if(session()->get('user') === null) return redirect('/');

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('DELETE', 'platillos/eliminar/' . $id);

        return redirect('/administracion/especialidades');
    }

}
