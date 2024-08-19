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
<body class="bg-ligh">
    
    <nav class="navbar navbar-expand-lg bg-success bg-gradient shadow">
      <div class="container-fluid p-3">
        
        <img style="width:400px;" src="{{ URL::to('/') }}/img/logo.png">


      </div>
    </nav>

    <div class="container">
        <h2 class="text-black my-4 fw-bold">Gestion de pedidos</h2>

        <table class="table table-light rounded-4 overflow-hidden shadow">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Usuario</th>
              <th scope="col">Orden</th>
              <th scope="col">Direccion</th>
              <th scope="col">Estado</th>
              <th scope="col">Fecha</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pedidos as $pedido)
              <tr>
                <th scope="row">{{ $pedido['idPedidoDomicilio'] }}</th>
                <td><a href="{{ route('ver.usuario', $pedido['orden']['usuario']['idUsuario']) }}">{{ $pedido['orden']['usuario']['nombre'] }} {{ $pedido['orden']['usuario']['apellido'] }}</a></td>
                <td>{{ $pedido['orden']['idOrden'] }}</td>
                <td>{{ $pedido['direccion'] }}</td>
                <td>{{ $pedido['orden']['status'] }}</td>
                <td>{{ $pedido['fechaEntrega'] }}</td>
                @php
                  $option = "";
                  if($pedido['orden']['status'] === "Pendiente") {
                    $option = "Confirmar";
                  }
                @endphp
                <td><a href="{{ route('confirmar.orden', $pedido['orden']['idOrden']) }}">{{ $option }}</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>



</body>
</html>



