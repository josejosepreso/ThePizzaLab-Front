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
        
        <a href="{{ route('inicio') }}"><img style="width:400px;" src="{{ URL::to('/') }}/img/logo.png"></a>


      </div>
    </nav>

    <div class="container">
    
        <h2 class="fw-bold text-black mt-4">Especialidades disponibles</h2>

            <div class="container text-center d-flex justify-content-center">
                <div class="row row-cols-{{ sizeof($data) + 1 > 3 ? 4 : sizeof($data) + 1 }}">

                    @foreach($data as $item)
                        <div class="p-4 col shadow-sm">
                            <a href="{{ route('editar.especialidad', $item['idPlatillo']) }}">
                              <img class="menu-items-img my-2" src="{{ URL::to('/') }}/img/menu/{{ $item['img'] }}.jpg">
                              <p class="text-black fw-bold">{{ $item['nombre'] }}</p>
                            </a>
                            <div class="bg-danger text-white p-3 mb-2">DISPONIBLE</div>
                            <p class="text-black">{{ $item['descripcion'] }}</p>
                        </div>
                    @endforeach

                    <div class="p-5 col">
                      <a href="{{ route('crear.platillo') }}" class="d-flex align-items-center justify-content-center text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="190px" height="190px" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                          <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                        </svg>
                      </a>
                    </div>

                </div>
            </div>



    </div>


</body>
</html>