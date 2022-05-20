@extends('layouts.plantilla')

@section('contenido')

<!DOCTYPE html>
<html>
<head>
<title>Incapacidad Medica</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">Rellenar los campos para generar la incapacidad medica</div>
                    <div class="card-body">
                        
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="date">Fecha</label>
                                <input type="text" class="form-control datepicker" placeholder="Date" name="date">
                                <label for="date">Nombre del paciente</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <label for="date">Razón</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <label for="date">Se le envía a</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <br>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection