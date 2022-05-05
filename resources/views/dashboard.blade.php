@extends('layouts.plantilla')

@section('contenido')
<br>
<div class="container-fluid containercardsdash">
    <!-- @isset($name)
        @foreach($name as $productname)
            <h1>{{ $productname }},</h1>
        @endforeach
    @endisset    -->
    <br>
    <!-- Card Signos-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Signos vitales</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Signos Vitales
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-heart-pulse fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Generar receta-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Receta</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Signos Vitales
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-heart-pulse fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Signos-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Signos vitales</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Signos Vitales
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-heart-pulse fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Generar historial clinico-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Historial clinico</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#historialClinicoModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Historial Clinico
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-file-medical-alt fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Generar receta-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Receta</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Signos Vitales
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-heart-pulse fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Modal Signos-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Signos Vitales</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalsignos">
        @csrf
        <label for="inputnombre">Nombre</label>
        <input id="inputnombre" type="text" class="form-control" name="NombreSigno2" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <!-- Modal Historial clinico-->
    <div class="modal fade" id="historialClinicoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Historial Clinico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalhistorialclinico">
        @csrf
        <label for="expedienteid">Id del expediente del paciente</label>
        <input type="text" class="form-control" id="expedienteid" name="idexpediente" required>
        <br>
        <label for="inputfechadeexpedicion">Fecha de expedicion</label>
        <div class="input-group date">
            <input type="text" class="form-control" id="inputfechadeexpedicion" name="fechaexpedicion" required>
            <i class="fa-solid fa-calendar-days calendario"></i>
        </div>
        <br>
        <label for="inputfechadeenfermedadactual">Fecha de enfermedad actual</label>
        <div class="input-group date">
            <input type="text" class="form-control" id="inputfechadeenfermedadactual" name="fechaenfermedadactual" required>
            <i class="fa-solid fa-calendar-days calendario"></i>
        </div>
        <br>
        <label for="inputfechadediagnostico">Fecha de diagnostico</label>
        <div class="input-group date">
            <input type="text" class="form-control" id="inputfechadediagnostico" name="fechadiagnostico" required>
            <i class="fa-solid fa-calendar-days calendario"></i>
        </div>
        <br>
        <label for="inputenfermedadactual">Enfermedad actual</label>
        <input id="inputenfermedadactual" type="text" class="form-control" name="enfermedadactual" required>
        <br>
        <label for="inputexamenesprescritos">Examenes prescritos</label>
        <input id="inputexamenesprescritos" type="text" class="form-control" name="examenesprescritos" required>
        <br>
        <label for="inputdiagnostico">Diagnostico</label>
        <input id="inputdiagnostico" type="text" class="form-control" name="diagnostico" required>
        <br>
        <label for="inputrecetaexpedida">Receta expedida</label>
        <input id="inputdirecetaexpedida" type="text" class="form-control" name="receta" required>
        <br>
        <label for="inputobservaciones">Observaciones</label>
        <input id="inputobservaciones" type="text" class="form-control" name="observaciones" required>
        <br>
        <label for="inputplanmedico">Plan medico a seguir</label>
        <input id="inputplanmedico" type="text" class="form-control" name="planmedico" required>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">Consulta subsecuente</label>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script>
    $(document).ready(function() {
            $('#inputfechadeexpedicion').datepicker({
                isRTL: false,
                format: 'dd/mm/yyyy',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadeenfermedadactual').datepicker({
                isRTL: false,
                format: 'dd/mm/yyyy',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadediagnostico').datepicker({
                isRTL: false,
                format: 'dd/mm/yyyy',
                todayHighlight: true,
                language: 'es'
            });
    });
    $(document).ready(function() {
        $("#modalsignos").submit(function(e) {
        e.preventDefault();
        var valinputsigno = document.getElementById("inputnombre").value;

        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('signos')}}",
                    type:"POST",
                    data:{
                        'NombreSigno': valinputsigno,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        document.getElementById("inputnombre").value="";
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho!.',
                            text: 'Se registraron correctamente los Signos Vitales ' +test.nombre,
                            confirmButtonText: 'Ok',
                            })
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registraron los signos vitales', '', 'info')
            }
            })
        });
    });
    $(document).ready(function() {
        $("#modalhistorialclinico").submit(function(e) {
        e.preventDefault();
        var valinputexpedienteid = document.getElementById("expedienteid").value;
        var valinputfechaexpedicion = document.getElementById("inputfechadeexpedicion").value;
        var valinputfechaenfermedadactual = document.getElementById("inputfechadeenfermedadactual").value;
        var valinputfechadiagnostico = document.getElementById("inputfechadediagnostico").value;
        var valinputenfermedadactual = document.getElementById("inputenfermedadactual").value;
        var valinputexamenesprescritos = document.getElementById("inputexamenesprescritos").value;
        var valinputdiagnostico = document.getElementById("inputdiagnostico").value;
        var valinputrecetaexpedida = document.getElementById("inputdirecetaexpedida").value;
        var valinputobservaciones = document.getElementById("inputobservaciones").value;
        var valinputplanmedico = document.getElementById("inputplanmedico").value;

        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('signos')}}",
                    type:"POST",
                    data:{
                        'IdExpediente': valinputexpedienteid,
                        'FechaExpedicion': valinputfechaexpedicion,
                        'FechaEnfermedadActual': valinputfechaenfermedadactual,
                        'FechaDiagnostico': valinputfechadiagnostico,
                        'EnfermedadActual': valinputenfermedadactual,
                        'ExamenesPrescritos': valinputexamenesprescritos,
                        'Diagnostico': valinputdiagnostico,
                        'RecetaExpedida': valinputrecetaexpedida,
                        'Observaciones': valinputobservaciones,
                        'PlanMedico': valinputplanmedico,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        document.getElementById("inputnombre").value="";
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho!.',
                            text: 'Se registraron correctamente los Signos Vitales ' +test.nombre,
                            confirmButtonText: 'Ok',
                            })
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registraron los signos vitales', '', 'info')
            }
            })
        });
    });
</script>
@endsection
