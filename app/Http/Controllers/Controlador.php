<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;

class Controlador extends Controller
{
    //
    public function bienvenida() {

        session()->put('user', null);

        return view('bienvenida');
    }

    public function iniciarSesion(Request $request) {

        $email = $request->email;
        $password = $request->password;

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('GET', 'usuarios/buscar',[
                'body' => json_encode([
                    'correo' => $email,
                    'contrasena' => $password
                ])
        ]);

        $data = json_decode($response->getBody(), true);

        if(sizeof($data) === 0) {

            $status = false;

            return view('bienvenida', ['status' => $status]);
        } else {

            session()->put('user', $data[0]['correo']);

            $tipousuario = $data[0]['tipousuario'];
            if($tipousuario == 1) {
                return view('inicio');
            }
            return redirect('/menu');
        }
    }

    public function registrarUsuario(Request $request) {

        echo $request;

        return redirect('/menu');
    }

}
