@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Usuarios</h4>
            </div>
            <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#usuariosModal" class="btn btn-primary col-sm-3">Agregar Usuarios</a>
            <br>
           <br>
            <table class="table text-md-nowrap" id="datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Fecha de Creacion</th>
                        <th>Fecha de Actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<!-- Script -->
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


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

    $(document).ready(function () {
        $('#datatable').DataTable({
            "responsive":true,
            "ajax": "{{route('usuarios_data')}}",
            "type":"GET",
            "columns":[
                {data:'name'},
                {data:'email'},
                {data:'created_at'},
                {data:'updated_at'},
                {defaultContent: "<button id='edit'>Editar</button> / <button id='delete'>Eliminar</button>"}
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

    
    $(document).ready(function(){
        $("#usuarios").submit(function(e){
            e.preventDefault();
            //console.log("Hola");
            var element = document.getElementById("usuarios");
            var valinputname = document.getElementById("inputName").value;
            var valinputEmail = document.getElementById("inputEmail").value;
            var valinputCreated_at = document.getElementById("inputCreated_at").value;
            var valinputUpdated_at = document.getElementById("inputUpdated_at").value;
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
                    url:"{{route('usuarios')}}",
                    type:"POST",
                    dataType:"json",
                    data:{
                        'nombreUsuario': valinputname,
                        'email': valinputEmail,
                        'fechaCreacion': valinputCreated_at,
                        'fechaActualizacion': valinputUpdated_at,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    success: function(test){
                        element.classList.remove("was-validated");
                        $('#inputName').val(null);
                        $('#inputEmail').val(null);
                        $('#inputCreated_at').val(null);
                        $('#inputUpdated_at').val(null);
                        $('#datatable').DataTable().ajax.reload(null,false);
                        if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente el usuario: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                                
                            }
                            if(test.estado === 'error'){
                                //console.log('entro a este if');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar el usuario: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                        //table.draw();
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro el usuario', '', 'info')
            }
            })
        }
        });
    });

</script>
@endsection




