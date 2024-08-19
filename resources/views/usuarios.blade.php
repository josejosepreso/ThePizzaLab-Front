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
        <h2 class="text-black my-4 fw-bold">Gestion de usuarios</h2>

        <table class="table table-light rounded-4 overflow-hidden shadow">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Correo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo usuario</th>
              <th scope="col">Opcion</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $user['idUsuario'] }}</th>
                  <td>{{ $user['email'] }}</td>
                  <td>{{ $user['nombre'] }} {{ $user['apellido'] }}</td>
                  <td>{{ $user['tipoUsuario']['descripcion'] }}</td>
                  <td><a href="{{ route('ver.usuario', $user['idUsuario']) }}">Ver</a></td>
                </tr>
            @endforeach
           </tbody>
        </table>
    </div>



</body>
</html>

