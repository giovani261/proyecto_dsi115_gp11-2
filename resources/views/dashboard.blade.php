@extends('layouts.plantilla')

@section('contenido')
<br>
<div class="container-fluid containercardsdash">
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
    <!-- Card Expediente clinico-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center>Expediente clinico</center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#expedienteClinicoModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Expediente Clinico
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
        <label for="expedienteid">Seleccione un paciente al que se le vinculara el historial, el formato de la lista es: Paciente -- Dui</label>
        <br>
        <select class="form-select" aria-label="Default select example" name="idexpediente" id="expedienteid">
            @foreach($expedientes as $expediente)
                <option value="{{$expediente->id}}" required>{{$expediente->nombre}} -- {{ $expediente->{'dui paciente'} }}</option>
            @endforeach
        </select>
        <!-- <input type="text" class="form-control" id="expedienteid" name="idexpediente" required> -->
        <br>
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
        <textarea class="form-control" id="inputdiagnostico" rows="3" name="diagnostico" required></textarea>
        <!-- <input id="inputdiagnostico" type="text" class="form-control" name="diagnostico" required> -->
        <br>
        <label for="inputrecetaexpedida">Receta expedida</label>
        <input id="inputdirecetaexpedida" type="text" class="form-control" name="receta" required>
        <br>
        <label for="inputobservaciones">Observaciones</label>
        <textarea class="form-control" id="inputobservaciones" rows="3" name="observaciones" required></textarea>
        <!-- <input id="inputobservaciones" type="text" class="form-control" name="observaciones" required> -->
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
    <!-- Modal Expediente clinico-->
    <div class="modal fade" id="expedienteClinicoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Expediente Clinico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalexpedienteclinico">
        @csrf
        <label for="inputnombrepaciente">Nombre del paciente</label>
        <input type="text" class="form-control" id="inputnombrepaciente" name="nombreexpediente"  pattern="[a-zA-Z'-'\s]*" required>
        <br>
        <label for="inputedad">Edad</label>
        <input type="text" class="form-control" id="inputedad" name="edad" pattern="^\d{1,3}$" required>
        <br>
        <label for="inputdomicilio">Domicilio</label>
        <input type="text" class="form-control" id="inputdomicilio" name="domicilio" required>
        <br>
        <label for="inputresponsable">Responsable</label>
        <input id="inputresponsable" type="text" class="form-control" name="responsable" pattern="[a-zA-Z'-'\s]*" required>
        <br>
        <label for="inputduipaciente">Dui del paciente</label>
        <input id="inputduipaciente" type="text" class="form-control" name="duipaciente" placeholder="9 digitos sin guiones" pattern="[0-9]{9}" required>
        <br>
        <label for="inputduiresponsable">Dui del responsable</label>
        <input id="inputduiresponsable" type="text" class="form-control" name="duiresponsable" placeholder="9 digitos sin guiones" pattern="[0-9]{9}" required>
        <br>
        <label for="inputantecedentes">Antecedentes patologicos</label>
        <input id="inputantecedentes" type="text" class="form-control" name="antecedentes">
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
<center>
    <h5>Agenda de citas del dia</h5>
</center>
<div class="row justify-content-center">
    <div class="col-auto">
        <div class="table-responsive container-fluid">
            <table class="table table-hover table-bordered w-auto">
                <thead class="tablehead">
                    <tr class="text-center">
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                        <tr class="text-center">
                            <td>{{$cita->nombre}}</td>
                            <td>{{$cita->telefono}}</td>
                            <td>{{$cita->hora}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script>
    $('#expedienteid').select2({
        dropdownParent: $('#historialClinicoModalCenter'),
        width: '100%'
    });
    $(document).ready(function() {
            $('#inputfechadeexpedicion').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadeenfermedadactual').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadediagnostico').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
    });
    //js para envio por ajax para la ventana de consulta subsecuente
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
    //js para envio por ajax para la ventana de historial
    $(document).ready(function() {
        $("#modalhistorialclinico").submit(function(e) {
        e.preventDefault();
        var selectexpedienteid = document.getElementById('expedienteid');
        var selectexpedienteidvalue = selectexpedienteid.options[selectexpedienteid.selectedIndex].value;
        var selectexpedienteidtext = selectexpedienteid.options[selectexpedienteid.selectedIndex].text;
        var valinputfechaenfermedadactual = document.getElementById("inputfechadeenfermedadactual").value;
        var valinputfechadiagnostico = document.getElementById("inputfechadediagnostico").value;
        var valinputenfermedadactual = document.getElementById("inputenfermedadactual").value;
        var valinputexamenesprescritos = document.getElementById("inputexamenesprescritos").value;
        var valinputdiagnostico = document.getElementById("inputdiagnostico").value;
        var valinputrecetaexpedida = document.getElementById("inputdirecetaexpedida").value;
        var valinputobservaciones = document.getElementById("inputobservaciones").value;
        var valinputplanmedico = document.getElementById("inputplanmedico").value;
        //console.log(selectexpedienteidvalue);

        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('historial')}}",
                    type:"POST",
                    data:{
                        'IdExpediente': selectexpedienteidvalue,
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
                        //document.getElementById("inputnombre").value="";
                            if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente el hisotial del paciente: '+selectexpedienteidtext,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                            if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar el hisotial del paciente: '+selectexpedienteidtext,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro del hisotial', '', 'info')
            }
            })
        });
    });
    //js para envio por ajax para la ventana de expediente
    $(document).ready(function() {
        $("#modalexpedienteclinico").submit(function(e) {
        e.preventDefault();
        var valinputnombrepaciente = document.getElementById("inputnombrepaciente").value;
        var valinputedad = document.getElementById("inputedad").value;
        var valinputdomicilio = document.getElementById("inputdomicilio").value;
        var valinputresponsable = document.getElementById("inputresponsable").value;
        var valinputduipaciente = document.getElementById("inputduipaciente").value;
        var valinputduiresponsable = document.getElementById("inputduiresponsable").value;
        var valinputantecedentes = document.getElementById("inputantecedentes").value;

        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('expediente')}}",
                    type:"POST",
                    data:{
                        'NombrePaciente': valinputnombrepaciente,
                        'Edad': valinputedad,
                        'Domicilio': valinputdomicilio,
                        'Responsable': valinputresponsable,
                        'DuiResponsable': valinputduiresponsable,
                        'DuiPaciente': valinputduipaciente,
                        'Antecedentes': valinputantecedentes,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        //document.getElementById("inputnombre").value="";
                        if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente el expediente de ' +test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar el expediente de ' +test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro del expediente', '', 'info')
            }
            })
        });
    });
</script>
@endsection
