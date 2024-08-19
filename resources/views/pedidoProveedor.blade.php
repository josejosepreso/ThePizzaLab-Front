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
            <h2 class="text-black fw-bold mt-4">Crear pedido a proveedor {{ $ingrediente['proveedor']['nombre'] }}</h2>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="p-4 bg-light shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form action="{{ route('confirmar.pedido', $ingrediente['idIngrediente']) }}" method="GET">

                        <div class="form-group my-2  row align-items-start">
                            <label class="col" for="">Ingrediente</label>
                            <input class="col form-control" id="" name="" value="{{ $ingrediente['nombre'] }}" readonly>
                            <p class="col"></p>
                        </div>

                        <div class="form-group my-2  row align-items-start">
                            <label class="col" for="">Disponible</label>
                            <input class="col form-control" id="" name="" value="{{ $ingrediente['cantidadDisponible'] }}" readonly>
                            <p class="col" for="">{{ $ingrediente['unidad'] }}</p>
                        </div>

                        <div class="form-group my-2  row align-items-start">
                            <label class="col" for="">Ordenar</label>
                            <input class="col form-control" id="" name="cantidad" value="0" type="number" step="0.1" min="0" max="5.0" required>
                            <p class="col" for="">{{ $ingrediente['unidad'] }}</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="mt-4 px-4 btn bg-black text-white fw-bold" type="submit">Confirmar</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>



</body>
</html>