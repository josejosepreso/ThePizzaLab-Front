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
        <h2 class="text-black my-4 fw-bold">Gestion de inventario</h2>

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
                <td>{{ $ingredient['cantidadDisponible'] }}</td>
                <td>{{ $ingredient['puntoreorden'] }}</td>
                <td>{{ $ingredient['unidad'] }}</td>
                <td>{{ $ingredient['proveedor']['nombre'] }}</td>
                <td><a href="#">Crear pedido</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>



</body>
</html>


