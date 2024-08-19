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
        <h2 class="text-black my-4 fw-bold">Historico de facturas</h2>

        <table class="table table-light rounded-4 overflow-hidden shadow">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Usuario</th>
              <th scope="col">Orden</th>
              <th scope="col">ISV</th>
              <th scope="col">Total</th>
              <th scope="col">Fecha</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($facturas as $factura)
              <tr>
                <th scope="row">{{ $factura['idFactura'] }}</th>
                <td>{{ $factura['orden']['usuario']['nombre'] }} {{ $factura['orden']['usuario']['apellido'] }}</td>
                <td>{{ $factura['orden']['idOrden'] }}</td>
                <td>{{ $factura['isv'] }} Lps</td>
                <td>{{ $factura['total'] }} Lps</td>
                <td>{{ $factura['fechaEntrega'] }}</td>
                <td><a href="{{ route('ver.factura', $factura['idFactura']) }}">Detalles</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>



</body>
</html>



