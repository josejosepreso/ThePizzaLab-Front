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
            <h2 class="text-black fw-bold">Informacion de la especialidad</h2>
        </div>
        <div class="d-flex justify-content-center">
            <h4 class="text-black">Agregue la informacion requerida</h4>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="p-4 bg-light shadow-lg" style="width:30vw;border-radius:10px;">

                <div class="form-container">
                    <form method="GET">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="id">ID:</label>
                            <input class="col form-control" id="" name="id" value="{{ $idEspecialidad }}" readonly>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="name">Nombre:</label>
                            <input class="col form-control" type="text" id="" name="name" value="" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="description">Descripcion:</label>
                            <textarea class="col form-control" type="text" id="" name="description" value="" required></textarea>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="price">Precio:</label>
                            <input class="col form-control" type="text" id="" name="price" value="" required>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="availability">Disponibilidad:</label>
                            <input class="col form-control" type="text" id="" name="availability" value="" required>
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