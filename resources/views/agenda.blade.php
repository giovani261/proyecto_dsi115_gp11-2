@extends('layouts.plantilla')

@section('contenido')

<!DOCTYPE html>
<html>
<head>
<title>Agendar cita</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">Por favor seleccionar la fecha de su cita</div>
                    <div class="card-body">
                        
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="date">Nombre</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <label for="date">Teléfono</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <label for="date">Fecha</label>
                                <input type="text" class="form-control datepicker" placeholder="Date" name="date">
                                <br>
                                <label for="cars">Seleccione la especialidad</label>
                                <select name="form-control" id="especialidad">
                                  <option value="">Gastritis y cáncer del estomago</option>
                                  <option value="">Colitis y cáncer de colon</option>
                                  <option value="">Estreñimiento y sangrado rectal</option>
                                  <option value="">Hemorroides</option>
                                  <option value="">Cáncer recto</option>
                                  <option value="">Hígdo y cálculos en vesícula</option>
                                  <option value="">Reflujo gastro-espfágico</option>
                                </select> 
                                <br>
                                <br>
                                <label for="date">Hora</label>
                                <input type="time" name="form-control" min="18:00" max="21:00" step="3600" />
                            </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">

        var datesForDisable = ["08-5-2021", "08-10-2021", "08-15-2021", "08-20-2021"]

        $('.datepicker').datepicker({
            format: 'mm-dd-yyyy',
            autoclose: true,
            todayHighlight: true,
            datesDisabled: datesForDisable
        });
    </script>
</body>
</html>
@endsection