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
        
        <a href="{{ route('menu') }}"><img style="width:400px;" src="{{ URL::to('/') }}/img/logo.png"></a>

      </div>
    </nav>

    <div class="container">


        <div class="d-flex justify-content-center">
            <h2 class="text-black fw-bold mt-4">Informacion de la compra</h2>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="p-4 bg-light shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form action="{{ route('metodo.pago') }}" method="GET">

                        <input name="id" value="{{ $platillo['idPlatillo'] }}" style="display:none;">
                        <input name="tipo" value="{{ $data['tipo'] }}" style="display:none;">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Cliente</label>
                            <input class="col form-control" id="" name="cliente" value="{{ $data['cliente'] }}" readonly>
                        </div>



                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Platillo</label>
                            <input class="col form-control" id="" name="platillo" value="{{ $platillo['nombre'] }}" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Precio unitario</label>
                            <input class="col form-control" id="" name="precio_unit" value="{{ $platillo['precio'] }} Lps" readonly>
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
                            <input class="col form-control" id="" name="subtotal" value="{{ $subtotal }} Lps" readonly>
                        </div>

                        @php
                            $precio_envio = $platillo['precio'] * 0.12;
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Precio de envio</label>
                            <input class="col form-control" id="" name="precio_envio" value="{{ $precio_envio }} Lps" readonly>
                        </div>

                        @php
                            $isv = round(0.15 * ($subtotal + $precio_envio), 2);
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">ISV</label>
                            <input class="col form-control" id="" name="isv" value="{{ $isv }} Lps" readonly>
                        </div>

                        @php
                            $total = $subtotal + $precio_envio + $isv
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Total</label>
                            <input class="col form-control" id="" name="total" value="{{ $total }} Lps" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="direccion">Direccion</label>
                            <input class="col form-control" id="" name="direccion" value="{{ $data['direccion'] }}" readonly>
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