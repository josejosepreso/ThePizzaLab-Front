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
        <div class="d-flex justify-content-center my-4">
            <div class="p-4 bg-white shadow-lg" style="width:30vw;border-radius:10px;">

            <div class="d-flex justify-content-center">
                <img class="rounded-3 menu-selected-img" src="{{ URL::to('/') }}/img/menu/{{ $data['img'] }}.jpg">
            </div>

            <p class="mt-3">
                <strong class="fs-4">{{ $data['nombre'] }}</strong>
                <input style="display:none;" name="idPlatillo" value="{{ $data['idPlatillo'] }}" type="text">
                </br>
                <p>{{ $data['descripcion'] }}</p>
            </p>
            <div class="form-container">
                <form action="{{ route('crear.orden') }}" method="GET">

                    <input name="id" value="{{ $data['idPlatillo'] }}" style="display:none;">

                    <div class="form-group my-2 row align-items-start">
                        <label class="col fw-bold" for="">Precio:</label>
                        <input class="col form-control" type="text" id="" name="" value="{{ $data['precio'] }} Lps" readonly>
                    </div>

                    <div class="form-group my-2 row align-items-start">
                        <label class="col fw-bold" for="cantidad">Cantidad:</label>
                        <input class="col form-control" type="number" max="10" min="1" id="" name="cantidad" value="1" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="mt-4 px-4 btn bg-black text-white fw-bold" type="submit">Siguiente</button>
                    </div>


                </form>
            </div>



    </div>



</body>
</html>