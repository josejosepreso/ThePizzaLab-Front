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
            <h2 class="text-black fw-bold mt-4">Pedido a domicilio</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="text-black mt-2">Agregue la informacion requerida</h4>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="p-4 bg-white rounded-4 shadow-lg" style="width:30vw;">

                <div class="form-container">
                    <form action="{{ route('ver.compra') }}" method="GET">

                        <input style="display:none;" value="{{ $order['id'] }}" name="id">
                        <input style="display:none;" value="{{ $order['cantidad'] }}" name="cantidad">
                        <input style="display:none;" value="{{ $order['tipo'] }}" name="tipo">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="amount">Direccion:</label>
                            <input class="col form-control" id="" name="direccion" type="text" value="Sample" required>
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