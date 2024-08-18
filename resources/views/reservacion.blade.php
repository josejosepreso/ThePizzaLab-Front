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

        <div class="d-flex justify-content-center">
            <h2 class="text-black fw-bold mt-4">Crear una reservacion</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="text-black mt-2">Agregue la informacion requerida</h4>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-4 bg-white shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form action="{{ route('ver.compra', $order) }}" method="GET">

                        <input style="display:none;" value="{{ $order['id'] }}" name="id">
                        <input style="display:none;" value="{{ $order['cantidad'] }}" name="cantidad">
                        <input style="display:none;" value="{{ $order['tipo'] }}" name="tipo">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="personas">Cantidad de personas:</label>
                            <input class="col form-control" id="" name="personas" type="number" value="1" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="fecha">Fecha de la reserva:</label>
                            <input class="col form-control" type="date" id="" name="fecha" value="" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="hora">Hora:</label>
                            <input class="col form-control" type="time" min="08:00:00" max="22:00:00" id="" name="hora" value="" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="mesa">Numero de mesa:</label>
                            <input class="col form-control" type="number" id="" name="mesa" value="1" min="1" max="5" required>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="mt-4 px-4 btn bg-black text-white fw-bold" type="submit">Siguiente</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>



</body>
</html>