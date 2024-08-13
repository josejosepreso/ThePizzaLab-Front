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

        <div class="d-inline-flex align-items-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
              <a class="btn btn-success m-3 fs-5 fw-bold text-white px-4" href="{{ route('bienvenida') }}">
                Cerrar sesion
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
    
        <h2 class="fw-bold text-black mt-4">Especialidades disponibles</h2>

            <div class="container text-center d-flex justify-content-center">
                <div class="row row-cols-{{ sizeof($data) > 3 ? 4 : sizeof($data) }}">

                    @foreach($data as $item)
                        <div class="p-4 col bg-white rounded-3">
                            <a href="{{ route('ver.especialidad', $item['id']) }}">
                              <img class="menu-items-img my-2" src="{{ URL::to('/') }}/img/menu/{{ $item['img'] }}">
                              <p class="text-black fw-bold">{{ $item['name'] }}</p>
                            </a>
                            <div class="bg-danger text-white p-3 mb-2">DISPONIBLE</div>
                            <p class="text-black">{{ $item['description'] }}</p>
                        </div>
                    @endforeach

                </div>
            </div>



    </div>


</body>
</html>