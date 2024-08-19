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
                    <form id="main-form" method="GET" action="{{ route('actualizar.platillo') }}">

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="id">ID:</label>
                            <input class="col form-control" id="" name="id" value="{{ $platillo['idPlatillo'] }}" readonly>
                        </div>







                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="nombre">Nombre:</label>
                            <input class="col form-control" id="" name="nombre" type="text" value="{{ $platillo['nombre'] }}" required>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="descripcion">Descripcion:</label>
                            <textarea class="col form-control" id="" name="descripcion">{{ $platillo['descripcion'] }}</textarea>
                        </div>
                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="precio">Precio:</label>
                            <input class="col form-control" type="text" id="" name="precio" value="{{ $platillo['precio'] }}" required>
                        </div>


                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col">Ingredientes:</label>
                            <a data-bs-toggle="modal" data-bs-target="div#ingredientsModal"  class="col btn bg-black text-white fw-bold">Ver</a>
                        </div>

                        <div class="form-group my-2 fw-bold row align-items-start">
                            <label class="col" for="">Archivo de imagen:</label>
                            <input class="col form-control" id="" name="img" type="text" value="{{ $platillo['img'] }}">
                        </div>



















                        <div class="d-flex justify-content-center">
                            <a href="{{ route('eliminar.platillo', $platillo['idPlatillo'] ) }}" class="mt-4 mx-2 px-4 btn bg-danger text-white fw-bold">Eliminar</a>
                            <button class="mt-4 mx-2 px-4 btn bg-black text-white fw-bold" type="submit">Guardar</button>
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
                @foreach($platillo['platilloIngredientes'] as $platilloIngrediente)
                    <div class="form-group mb-2 mx-3">
                        <div class="row">
                            <label class="col fw-bold" for="{{ $platilloIngrediente['ingrediente']['nombre'] }}">{{ $platilloIngrediente['ingrediente']['nombre'] }}:</label>
                            <input form="main-form" class="col form-control"  id="" name="" value="{{ $platilloIngrediente['cantidadIngrediente'] }}" readonly>
                            <p class="small col">{{ $platilloIngrediente['ingrediente']['unidad'] }}</p>
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