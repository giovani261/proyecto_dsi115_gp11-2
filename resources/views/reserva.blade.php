@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Citas médicas</h4>
            </div>
            <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#citaModal" class="btn btn-primary col-sm-3"><i class="fa-solid fa-calendar-day"></i> Agendar cita</a>
            <br>
           <br>
            <table class="table text-md-nowrap" id="datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Especialidad</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Asignación de horas de citas pendientes</h4>
            </div>
            <br>
            <form method="POST" id="actualizarCita">
            @csrf   
            <label for="reservanull">Seleccione una cita, el formato de la lista es: Nombre -- Teléfono</label>
            <br>
            <select class="form-select" aria-label="Default select example" name="citas" id="reservanull" data-bs-toggle="tooltip" title="Seleccione los datos del paciente, el formato de la lista es: Nombre -- Telefono">
                @if($citas->isEmpty())
                    <option value="0" required>No hay citas</option>    
                @else
                @foreach($citas as $cita)
                    <option value="{{$cita->id}}" required>{{$cita->nombre }} - {{ $cita->telefono }}</option>
                @endforeach
                @endif
            </select>
            <br>    
            <label for="inputhorareserva">Seleccione Hora</label>
            <br>
            <input type="time" min="09:00" max="13:00" step="120" class="time form-control" id="inputhorareserva" data-bs-toggle="tooltip" title="Ingrese la hora"  required>
            <br>
            <label for="inputfechamodreserva">Seleccione la nueva fecha en caso de querer modificarla</label>
            <div class="input-group date">
                <input type="text" class="form-control" id="inputfechamodreserva" name="fechamodreserva" data-bs-toggle="tooltip" title="Seleccione una fecha" autocomplete="off">
                <i class="fa-solid fa-calendar-days calendario"></i>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="guardarhoracita"><i class="fa-solid fa-clock"></i> Establecer Hora</button>
           </form>

        </div>
    </div>
</div>
<!-- Modal Agendar Cita-->
<div class="modal fade" id="citaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservación de Citas</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body"> 
                <form method="POST" id="reservarCita" class="needs-validation" novalidate>
                @csrf
                <div class="from-group mb-3">
                    <label for="" class="form-label">Nombre del paciente</label>
                    <input type="text" class="name form-control" id="inputnombre" pattern="[a-zA-Z'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el nombre del paciente, solo se permiten letras" required required>
                    <div class="invalid-feedback">
                        Este campo no puede estar vacío.
                    </div>
                </div>
                <div class="from-group mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="phone form-control" id="inputTelefono" pattern="^(2|7)[0-9]{7}$" data-bs-toggle="tooltip" title="Ingrese el número de téfono fijo o celular" required>
                </div>
                <div class="invalid-feedback">
                    Este campo no puede estar vacio.
                </div>
                <label for="">Fecha</label>
                <div class="input-group date">
                    <input type="text" class="date form-control" id="inputfecha" data-bs-toggle="tooltip" title="Ingrese la fecha" autocomplete="off" required>
                    <i class="fa fa-calendar calendario"></i>
                </div>
                <div class="invalid-feedback">
                    Este campo no puede estar vacio.
                </div>
                <style>
                    div {
                        margin-bottom: 10px;
                        position: relative;
                        }

                        input[type="number"] {
                        width: 100px;
                        }

                        input + span {
                        padding-right: 30px;
                        }
                </style>
                <div class="from-group mb-3">
                    <label for="">Hora</label>
                    <input type="time" min="09:00" max="13:00" step="120" class="time form-control" id="inputhora"data-bs-toggle="tooltip" title="Ingrese la hora" required> 
                    <span class="validity"></span>
                </div>
                <label for="inputespecialidadmedica">Especialidad</label>
                <br>
                <div class="from-group mb-3">
                    <select class="form-control" id="inputespecialidad" name="especialidad" data-bs-toggle="tooltip" title="Ingrese el motivo de la consulta" required>
                        <option value="gastritis">Gastritis y Cáncer del Estomago</option>
                        <option value="colitis">Colitis y cáncer de colon</option>
                        <option value="estreñimiento">Estreñimiento y sangrado rectal</option>
                        <option vvalue="cancer">Cáncer recto y ano</option>
                        <option alue="hemorroides">Hemorroides</option>
                        <option value="higado">Hígado y cálculos en vesícula</option>
                        <option value="reflujo">Reflujo gastro-esofágico</option>
                    </select>
                </div>
                <div class="invalid-feedback">
                    Este campo no puede estar vacio.
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="guardar"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="removevalidateform('reservarCita');">Cancelar</button>
            </div></form>  
        </div>
    </div>
</div>
<!-- Fin Modal Agendar Cita-->
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $('#inputfechamodreserva').datepicker({
        isRTL: false,
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        startDate: new Date(),//Inhabilita fechas anteriores a la actual
        language: 'es'
    });

    $(document).ready(function() {
        var datesForDisable = ["08-5-2021", "08-10-2021", "08-15-2021", "08-20-2021"]; 
            $('#inputfecha').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                startDate: new Date(),//Inhabilita fechas anteriores a la actual
                weekStart: [1],//Establece incicio de semana en lunes
                datesDisabled: datesForDisable,
                language: 'es'
            });
    });

    $(document).ready(function(){
        $("#reservarCita").submit(function(e){
            e.preventDefault();
            //console.log("Hola");
            var element = document.getElementById("reservarCita");
            var valinputnombre = document.getElementById("inputnombre").value;
            var valinputTelefono = document.getElementById("inputTelefono").value;
            var valinputfecha = document.getElementById("inputfecha").value;
            var valinputhora = document.getElementById("inputhora").value;
            var valinputespecialidad = document.getElementById("inputespecialidad").value;
            //console.log(valinputnombre);
        if (element.checkValidity() === true) {
            Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('reserva')}}",
                    type:"POST",
                    dataType:"json",
                    data:{
                        'NombrePaciente': valinputnombre,
                        'Telefono': valinputTelefono,
                        'Fecha': valinputfecha,
                        'Hora': valinputhora,
                        'Especialidad': valinputespecialidad,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    success: function(test){
                        //document.getElementById("inputnombre").value="";
                        element.classList.remove("was-validated");
                        $('#inputnombre').val(null);
                        $('#inputTelefono').val(null);
                        $('#inputfecha').val(null).trigger('change');
                        $('#inputhora').val(null);
                        $('#inputespecialidad').val(null).trigger('change');
                        $('#datatable').DataTable().ajax.reload(null,false);
                        if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente la cita médica del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                                
                            }
                            if(test.estado === 'error'){
                                //console.log('entro a este if');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar la serva de cita médica del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                        //table.draw();
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro la reserva de cita médica', '', 'info')
            }
            })
        }
        });
    });

    $(document).ready(function () {
        $('#datatable').DataTable({
            "responsive":true,
            "ajax": "{{route('reservas_data')}}",
            "type":"GET",
            "columns":[
                {data:'nombre'},
                {data:'telefono'},
                {data:'fecha'},
                {data:'hora'},
                {data:'especialidad'}
            ],

            "language":{
                "decimal":        "",
                "emptyTable":     "No data available in table",
                "info":           "Mostrando la página _START_ de _END_ de _TOTAL_ registros",
                "infoEmpty":      "Showing 0 to 0 of 0 entries",
                "infoFiltered":   "(Filtrado de _MAX_ registros totales)",
                "lengthMenu":     "Mostrar _MENU_ registros por páginas",
                "loadingRecords": "Cargando registros...",
                "processing":     "",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontraron registros",
                
               
            } 
        });
        
    });

    $(document).ready(function() {
        $("#actualizarCita").submit(function(e) {
        e.preventDefault();
        var hora = document.getElementById("inputhorareserva").value;
        var cita = document.getElementById('reservanull');
        var citaid = cita.options[cita.selectedIndex].value;
        var valinputmodfechareserva = document.getElementById("inputfechamodreserva").value;
        //console.log(valinputmodfechareserva);
        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('citasactualizarajax')}}",
                    type:"POST",
                    data:{
                        'Citaid': citaid,
                        'Hora': hora,
                        'Fecha':valinputmodfechareserva,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        document.getElementById("inputhorareserva").value="";
                        document.getElementById('reservanull').value = "";
                        
                        if(test.estado === 'actualizado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se guardo correctamente la hora elegida',
                                    confirmButtonText: 'Ok',
                                    })    
                                    location.reload();
                            }
                            if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo guardar la hora',
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro la hora seleccionada', '', 'info')
            }
            })
        });
    });
   
</script>
@endsection
