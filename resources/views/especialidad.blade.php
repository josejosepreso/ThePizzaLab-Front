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
                            <label class="col" for="nombre">Nombre:</label>
                            <input class="col form-control" id="" name="nombre" type="text" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="descripcion">Descripcion:</label>
                            <textarea class="col form-control" id="" name="descripcion" value=""></textarea>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="precio">Precio:</label>
                            <input class="col form-control" type="text" id="" name="precio" value="" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="tipoPlatillo">Tipo de platillo:</label>
                            <select class="col form-control border-2" name="tipoPlatillo" required>
                                <option value="1" selected>Tipo de platillo</option>
                                <option value="2">Opcion</option>
                            </select>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col">Ingredientes:</label>
                            <a data-bs-toggle="modal" data-bs-target="div#ingredientsModal"  class="col btn bg-black text-white fw-bold">Seleccionar</a>
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


    <div class="modal fade" id="ingredientsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Ingredientes</h1>
          </div>
          <div class="modal-body">

            <div class="form-container">
                <p>Ingrese la cantidad de ingredientes que contiene este platillo.</p>
                @foreach($data as $ingrediente)
                    <div class="form-group mb-2 mx-3">
                        <div class="row">
                            <label class="col-3 fw-bold" for="{{ $ingrediente['name'] }}">{{ $ingrediente['name'] }}:</label>
                            <input form="main-form" class="col form-control" type="number" id="" name="cantidad{{ $ingrediente['name'] }}" value="0" required>
                            <p class="small col">{{ $ingrediente['unit'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

          </div>

          <div class="modal-footer">
      	    <button type="button" class="btn bg-black text-white" data-bs-dismiss="modal">OK</button>
		  </div>

        </div>
      </div>
    </div>



</body>
</html>