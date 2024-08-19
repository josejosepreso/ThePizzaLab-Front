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


        <div class="d-flex justify-content-center mt-4">
            <h2 class="text-black fw-bold">Informacion del usuario</h2>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="p-4 bg-light shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form method="GET" action="{{ route('actualizar.usuario', $user['idUsuario']) }}">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="id">ID:</label>
                            <input class="col form-control" id="" name="id" value="{{ $user['idUsuario'] }}" readonly>
                        </div>







                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="nombre">Nombre:</label>
                            <input class="col form-control" type="text" value="{{ $user['nombre'] }} {{ $user['apellido'] }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col">Correo:</label>
                            <input class="col form-control" value="{{ $user['email'] }}" readonly></input>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col">Fecha de creacion:</label>
                            <input class="col form-control" type="text" value="{{ $user['fechaCreacion'] }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col">Privilegios:</label>
                            <select class="col form-control border-2" required>
                                <option value="{{ $user['tipoUsuario']['descripcion'] === 'Cliente' ? 2 : 1 }}" selected>{{ $user['tipoUsuario']['descripcion'] === "Cliente" ? "Cliente" : "Administrador" }}</option>
                                <option value="{{ $user['tipoUsuario']['descripcion'] === 'Cliente' ? 1 : 2 }}"">{{ $user['tipoUsuario']['descripcion'] === "Cliente" ? "Administrador" : "Cliente" }}</option>
                            </select>
                        </div>



                        <div class="d-flex justify-content-center">
                            <a href="{{ route('eliminar.usuario', $user['idUsuario']) }}" class="mt-4 mx-2 px-4 btn bg-danger text-white fw-bold">Eliminar</a>
                            <button class="mt-4 mx-2 px-4 btn bg-black text-white fw-bold" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>




</body>
</html>