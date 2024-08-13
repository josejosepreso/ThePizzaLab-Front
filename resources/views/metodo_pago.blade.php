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
            <h2 class="fw-bold my-4 text-black">Metodo de pago</h2>
        </div>

        <div class="d-flex justify-content-center">
            <div style="width:60%;height:50vh;" class="rounded-4 bg-white shadow-lg row row-cols-1 bg-light d-flex justify-content-center p-4">
                <a href="#" class="order-option form-control bg-white my-2 d-flex align-items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                    </svg>


                    <p class="h2 mx-5 fw-bold">Tarjeta</p>

                </a>
                <a href="#" class="order-option form-control bg-white my-2 d-flex align-items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                    </svg>
                    

                    <p class="h2 mx-5 fw-bold">Efectivo</p>
                </a>
            </div>
        </div>
    </div>



</body>
</html>


