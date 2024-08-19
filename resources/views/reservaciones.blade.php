<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg bg-success bg-gradient shadow">
      <div class="container-fluid p-3">
        
        <img style="width:400px;" src="{{ URL::to('/') }}/img/logo.png">


      </div>
    </nav>

    <div class="container">
        <h2 class="text-black my-4 fw-bold">Gestion de reservaciones</h2>

        <table class="shadow table table-light rounded-4 overflow-hidden">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Usuario</th>
              <th scope="col">Numero de mesa</th>
              <th scope="col">Estado</th>
              <th scope="col">Fecha inicio</th>
              <th scope="col">Fecha fin</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reservaciones as $reservacion)
              <tr>
                <th scope="row">{{ $reservacion['idReservacion'] }}</th>
                <td><a href="{{ route('ver.usuario', $reservacion['orden']['usuario']['idUsuario']) }}">{{ $reservacion['orden']['usuario']['nombre'] }} {{ $reservacion['orden']['usuario']['apellido'] }}</a></td>
                <td>{{ $reservacion['mesa']['codigoMesa'] }}</td>
                <td>{{ $reservacion['orden']['status'] }}</td>
                <td>{{ $reservacion['fechaInicio'] }}</td>
                <td>{{ $reservacion['fechaFinal'] }}</td>
                @php
                  $option = "";
                  if($reservacion['orden']['status'] === "Pendiente") {
                    $option = "Confirmar";
                  }
                @endphp
                <td><a href="{{ route('confirmar.orden', $reservacion['orden']['idOrden']) }}">{{ $option }}</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>



</body>
</html>


