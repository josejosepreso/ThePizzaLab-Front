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
            <h2 class="text-black fw-bold mt-4">Crear un ingrediente</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="text-black mt-2">Agregue la informacion requerida</h4>
        </div>

        <div class="d-flex justify-content-center my-3">
            <div class="p-4 bg-white shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form action="{{ route('guardar.ingrediente') }}" method="GET" id="main-form">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="nombre">Nombre:</label>
                            <input class="col form-control" id="" name="nombre" type="text" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="puntoreorden">Punto de reorden:</label>
                            <input class="col form-control" id="" name="puntoreorden" value="" type="number" step="0.1" min="0" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="unidad">Unidad de medida:</label>
                            <input class="col form-control" type="text" id="" name="unidad" value="" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="proveedor">Proveedor:</label>
                            <input class="col form-control" type="text" id="" name="proveedor" value="" required>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button class="mt-4 px-4 btn bg-black text-white fw-bold" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

</body>
</html>