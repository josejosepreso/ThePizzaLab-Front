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

    <div style="height:70vh;" class="container d-flex align-items-center justify-content-center">


        <div class="">
            <h2 class="fw-bold my-4 h1 text-black">Gracias por su compra</h2>
            <p style="text-align:center;"><a class="btn bg-black text-white fw-bold" href="{{ route('menu') }}">Volver</a></p>
        </div>
    </div>






</body>
</html>



