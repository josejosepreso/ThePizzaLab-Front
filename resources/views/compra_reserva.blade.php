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
            <h2 class="text-black fw-bold">Informacion de la compra</h2>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="p-4 bg-light shadow-lg mb-3" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form action="{{ route('metodo.pago')}}" method="GET">


                        <input name="tipo" value="{{ $data['tipo'] }}" style="display:none;">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Cliente</label>
                            <input class="col form-control" id="" name="cliente" value="{{ $data['cliente'] }}" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="platillo">Platillo</label>
                            <input class="col form-control" id="" name="platillo" value="{{ $platillo['nombre'] }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="cantidad">Cantidad</label>
                            <input class="col form-control" id="" name="cantidad" value="{{ $data['cantidad'] }}" readonly>
                        </div>

                        @php
                            $subtotal = $platillo['precio'] * $data['cantidad'];
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="subtotal">Subtotal</label>
                            <input class="col form-control" id="" name="subtotal" value="{{ $subtotal }}" readonly>
                        </div>

                        @php
                            $isv = round(0.15 * ($subtotal), 2);
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="isv">ISV</label>
                            <input class="col form-control" id="" name="isv" value="{{ $isv }}" readonly>
                        </div>

                        @php
                            $total = $subtotal + $isv
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="total">Total</label>
                            <input class="col form-control" id="" name="total" value="{{ $total }}" readonly>
                        </div>





                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="personas">Cantidad de personas</label>
                            <input class="col form-control" id="" name="personas" value="{{ $data['personas'] }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="fecha">Fecha</label>
                            <input class="col form-control" id="" name="fecha" value="{{ $data['fecha'] }}" type="date" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="hora">Hora</label>
                            <input class="col form-control" id="" name="hora" value="{{ $data['hora'] }}" type="time" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="mesa">Numero de mesa</label>
                            <input class="col form-control" id="" name="mesa" value="{{ $data['mesa'] }}" readonly>
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