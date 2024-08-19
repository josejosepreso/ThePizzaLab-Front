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


        <div class="d-flex justify-content-center mt-4">
            <h2 class="text-black fw-bold">Informacion de la compra</h2>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="p-4 bg-light shadow-lg mb-3" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Cliente</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['orden']['usuario']['nombre'] }} {{ $factura['orden']['usuario']['apellido'] }}" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Platillo</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['orden']['ordenesPlatillos'][0]['platillo']['nombre'] }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Cantidad</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['orden']['ordenesPlatillos'][0]['cantidad'] }}" readonly>
                        </div>

                        @php
                            $subtotal = $factura['orden']['ordenesPlatillos'][0]['platillo']['precio'] * $factura['orden']['ordenesPlatillos'][0]['cantidad'];
                        @endphp

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Subtotal</label>
                            <input class="col form-control" id="" name="" value="{{ $subtotal }}" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="isv">ISV</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['isv'] }}" readonly>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Total</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['total'] }}" readonly>
                        </div>



                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Fecha</label>
                            <input class="col form-control" id="" name="" value="{{ $factura['fechaEntrega'] }}" type="" readonly>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>



</body>
</html>