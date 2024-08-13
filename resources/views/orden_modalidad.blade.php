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

    <input style="display:none;" value="{{ $order->id }}" name="id">
    <input style="display:none;" value="{{ $order->quantity }}" name="quantity">

    <div class="container">


        <div class="d-flex justify-content-center">
            <h2 class="text-black fw-bold mt-5">Que le gustaria?</h2>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div style="border-radius:10px;width:60%;height:50vh;" class="shadow-lg bg-white row row-cols-1 bg-light d-flex justify-content-center p-4">
                <a href="{{ route('reserva', array('id' => $order->id, 'cantidad' => $order->cantidad, 'tipo'=>'reserva')) }}" class="order-option form-control bg-white my-2 d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
</svg>

                    <p class="h2 mx-5 fw-bold">Comer en el local</p>

                </a>
                <a href="{{ route('pedir.domicilio', array('id' => $order->id, 'cantidad' => $order->cantidad, 'tipo'=>'pedido')) }}" class="order-option form-control bg-white my-2 d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
</svg>
                    <p class="h2 mx-5 fw-bold">Entrega</p>
                </a>
            </div>
        </div>
    </div>



</body>
</html>

