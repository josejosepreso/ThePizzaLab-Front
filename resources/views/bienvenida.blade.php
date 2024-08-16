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

    @isset($status)
      <div id="loginLabel" class="d-flex justify-content-center fw-bold text-white bg-danger">Usuario no encontrado</div>
    @endif

    <nav class="navbar navbar-expand-lg bg-success bg-gradient shadow">
      <div class="container-fluid p-3">
        
        <img class="" style="width:400px;" src="{{ URL::to('/') }}/img/logo.png">

        <div class="d-inline-flex align-items-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
              <a data-bs-toggle="modal" data-bs-target="div#loginModal" class="btn btn-success m-3 fs-5 fw-bold text-white px-4" aria-current="page" href="#">
                Iniciar sesion
              </a>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="modal" data-bs-target="div#registerModal" class="btn btn-success m-3 fs-5 fw-bold text-white px-4" href="#">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col mt-4">
            <p class="h2 fw-bold mb-2 text-black">Te damos la bienvenida a la pagina principal de</p>
            <img style="width:170px;height:170px;" src="{{ URL::to('/') }}/img/logo1.png" id="welcome-logo">
            <p class="my-3 lead text-black">Un espacio en el que nuestros administradores se encargaran de la gestion operativa de nuestro restaurante.</p>
            <p class="my-4 lead text-black">Crea tu cuenta o inicia sesion.</p>
        </div>
        <div style="height:60vh;" class="col d-flex align-items-center justify-content-center">
            <img style="width:500px;border-radius:20px;" class="shadow-lg" src="{{ URL::to('/') }}/img/Landing.png">
        </div>

      </div>
    </div>

    <nav class="navbar fixed-bottom bg-white shadow">
      <div class="container-fluid px-4 py-2">
        <p>2024 Todos los derechos reservados</p>
      </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Inicio de sesion</h1>
          </div>
          <div class="modal-body">

            <div class="form-container">
                <form action="{{ route('iniciar.sesion') }}" method="GET">
                    <div class="form-group my-2 fw-bold">
                        <label for="email">Usuario o Correo:</label>
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group my-2 fw-bold">
                        <label for="password">Contrase;a:</label>
                        <input class="form-control" type="password" id="password" name="password"  required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="my-4 px-4 btn btn-success fw-bold" type="submit">Iniciar sesion</button>
                    </div>
                </form>
            </div>

          </div>

        </div>
      </div>
    </div>




    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Registrarse</h1>
          </div>
          <div class="modal-body">

            <div class="form-container">
                <form action="{{ route('registrar.usuario') }}" method="POST">
                    @csrf

                    <div class="form-group my-2 fw-bold">
                        <label for="name">Nombre:</label>
                        <input class="form-control" type="text" id="nameReg" name="name"  required>
                    </div>

                    <div class="form-group my-2 fw-bold">
                        <label for="lastName">Apellido:</label>
                        <input class="form-control" type="text" id="nameReg" name="lastName"  required>
                    </div>


                    <div class="form-group my-2 fw-bold">
                        <label for="email">Correo electronico:</label>
                        <input class="form-control" type="email" id="emailReg" name="email" required>
                    </div>

                    <div class="form-group my-2 fw-bold">
                        <label for="password">Contrase;a:</label>
                        <input class="form-control" type="password" id="passwordReg" name="password"  required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="my-4 px-4 btn btn-success fw-bold" type="submit">Registrate</button>
                    </div>
                </form>
            </div>

          </div>

        </div>
      </div>
    </div>

    <script>
      const label = document.querySelector("div#loginLabel");

      if(label != null) {
        setTimeout(function() {
          label.remove();
        }, 3000);
      }
    </script>

</body>
</html>