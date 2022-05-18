@extends('layouts.plantilla')
 
@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Citas médicas
                        <a href="#" data-bs-toggle="modal" data-bs-target="#citaModal" class="btn btn-primary float-end btn-sm">Agendar cita</a>
                    </h4>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Agendar Cita-->
<div class="modal fade" id="citaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rservación de Citas</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body"> <form method="POST" id="reservarCita">
                @csrf
                <div class="from-group mb-3">
                    <label for="">Nombre del paciente</label>
                    <input type="text" class="name form-control" id="inputnombre" required>
                </div>
                <div class="from-group mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="phone form-control" id="inputTelefono" required>
                </div>
                <div class="from-group mb-3">
                    <label for="">Fecha</label>
                    <input type="text" class="date form-control" id="inputfecha" required><i class="fa fa-calendar"></i>
                </div>
                <div class="from-group mb-3">
                    <label for="">Hora</label>
                    <input type="text" class="time form-control" id="inputhora" required>
                </div>
                <div class="from-group mb-3">
                    <label for="">Especialidad</label>
                    <input type="text" class="name form-control" id="inputespecialidad" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div></form>  
        </div>
    </div>
</div>
<!-- Fin Modal Agendar Cita-->
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script>
    $(document).ready(function() {
        var datesForDisable = ["08-5-2021", "08-10-2021", "08-15-2021", "08-20-2021"]; 
            $('#inputfecha').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                daysOfWeekDisabled: [0], //inhabilita días domingos
                startDate: new Date(),//Inhabilita fechas anteriores a la actual
                weekStart: [1],//Establece incicio de semana en lunes
                datesDisabled: datesForDisable,
                language: 'es'
            });
    });

    $(document).ready(function(){
        $("#inputhora").clockTimePicker({
            
        });
    });

    $(document).ready(function(){
        $("#reservarCita").submit(function(e){
            e.preventDefault();
            //console.log("Hola");

            var valinputnombre = document.getElementById("inputnombre").value;
            var valinputTelefono = document.getElementById("inputTelefono").value;
            var valinputfecha = document.getElementById("inputfecha").value;
            var valinputhora = document.getElementById("inputhora").value;
            var valinputespecialidad = document.getElementById("inputespecialidad").value;
            //console.log(valinputnombre);

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
                    data:{
                        'NombrePaciente': valinputnombre,
                        'Telefono': valinputTelefono,
                        'Fecha': valinputfecha,
                        'Hora': valinputhora,
                        'Especialidad': valinputespecialidad,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        //document.getElementById("inputnombre").value="";
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho!.',
                            text: 'Se reservo correctamente la cita del paciente ' +test.nombrePaciente,
                            confirmButtonText: 'Ok',
                            })
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro la reserva de cita médica', '', 'info')
            }
            })
        });
    });
</script>
@endsection
