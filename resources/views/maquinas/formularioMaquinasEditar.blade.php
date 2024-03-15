<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

        <div class="corpo col-12">
        <div class="header">
            <h5>Registro de Maquinas</h5>
            <div class="inicio">
                <p>Cerrar Sesion <i class="bi bi-person-circle"></i></p>
            </div>
        </div>
        <div class="container col-11">
        <form action="{{route('editarMaquinas')}}" method="POST" class="container">
        @csrf
            <!-- <form class="row g-3 needs-validation" action="upload.php" method="POST" enctype="multipart/form-data" novalidate> -->
                <fieldset class="row g-3 needs-validation">
                    <input type="hidden" name="id" value="{{$maquinas['id']}}">
                    <legend>Datos del Vehículo o Equipo</legend>

                    <div class="col-md-3 position-relative">
                        <label for="validationTooltip01" class="form-label">Maquina</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="maquina" value="{{$maquinas['maquina']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="marca" value="{{$maquinas['marca']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="modelo" 
                        value="{{$maquinas['modelo']}}"required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2 position-relative">
                        <label for="validationTooltip01" class="form-label">Año</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="ano" value="{{$maquinas['ano']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Chasis</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="chasis" value="{{$maquinas['chasis']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Titular</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="titular" value="{{$maquinas['titular']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </fieldset>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>

   
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>