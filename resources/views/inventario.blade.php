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
        
        <a href="{{ route('inicio') }}"><img style="width:400px;" src="{{ URL::to('/') }}/img/logo.png"></a>


      </div>
    </nav>

    <div class="container">
        <h2 class="text-black mt-4 fw-bold">Gestion de inventario</h2>

        <a class="btn bg-black text-white fw-bold my-4" href="{{ route('crear.ingrediente') }}">Crear ingrediente</a>

        <table class="table table-light rounded-4 overflow-hidden shadow">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad disponible</th>
              <th scope="col">Punto de reorden</th>
              <th scope="col">Unidad de medida</th>
              <th scope="col">Proveedor</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ingredients as $ingredient)
              <tr>
                <th scope="row">{{ $ingredient['idIngrediente'] }}</th>
                <td>{{ $ingredient['nombre'] }}</td>
                @php
                  $text = "";
                  if($ingredient['cantidadDisponible'] <= $ingredient['puntoreorden']) {
                    $text = "text-danger fw-bold";
                  }
                @endphp
                <td class="{{ $text }}">{{ $ingredient['cantidadDisponible'] }}</td>
                <td>{{ $ingredient['puntoreorden'] }}</td>
                <td>{{ $ingredient['unidad'] }}</td>
                <td>{{ $ingredient['proveedor']['nombre'] }}</td>
                <td><a href="{{ route('crear.pedido', $ingredient['idIngrediente']) }}">Crear pedido</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>



</body>
</html>


