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
                    'email' => $email,
                    'contrasenia' => $password
                ])
        ]);

        $user = json_decode($response->getBody(), true);

        if(sizeof($user) === 0) {

            $status = false;

            return view('bienvenida', ['status' => $status]);
        } else {

            session()->put('user', $user[0]);

            $tipousuario = $user[0]['tipoUsuario']['idTipoUsuario'];
            if($tipousuario == 1) {
                return view('inicio');
            }

            return redirect('/menu');
        }
    }

    public function registrarUsuario(Request $request) {

        $name = $request->name;
        $lastName = $request->lastName;
        $email = $request->email;
        $password = $request->password;

        $client = new Client([ 'base_uri' => 'localhost:8091/api/', 'headers' => [ 'Content-Type' => 'application/json' ]]);
        $response = $client->request('POST', 'usuarios/crear/usuario',[
                'body' => json_encode([
                    'nombre' => $name,
                    'apellido' => $lastName,
                    'email' => $email,
                    'contrasenia' => $password
                ])
        ]);

        $user = json_decode($response->getBody(), true);

        print_r($user);

        return;

        return redirect('/menu');
    }

}