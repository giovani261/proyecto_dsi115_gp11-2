@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Medicamentos</h4>
            </div>
            <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#crearMedicamentoModal" class="btn btn-primary"><i class="fa fa-medkit"></i> Agregar Medicamentos</a>
            <br>
           <br>
            <table class="table text-md-nowrap" id="datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Modal crear medicamentos -->
<div class="modal fade" id="crearMedicamentoModal" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Medicamento</h5>
        <button type="button" id="cerrar" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalcrearmedicamento" class="needs-validation" novalidate>
            @csrf
            <label for="name"class="form-label">Nombre de Medicamento</label>
            <input id="inputnombre" type="text" class="form-control" name="name" value="" pattern="[a-zA-Z\u00f1\u00d1'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el nombre, solo se permiten letras" required autofocus>
            <div class="invalid-feedback">
                Este campo no puede quedar vacio.
            </div>
            <br>
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="inputcantidad" min="0" pattern="^[0-9]+$" data-bs-toggle="tooltip" title="Ingrese la cantidad, solo se permiten números" required>
                <div class="invalid-feedback">
                    Por favor, revise el formato del texto ingresado.
                </div>
            <br>
                <label for="precio">Precio</label>
                <span class="input-group-text">$</span><input id="inputprecio" type="text" class="form-control" name="precio" required minlength="1" pattern="^([0-9]?)*(\.\d{1,2})$" data-bs-toggle="tooltip" title="Ingrese el precio en el formato $0.00" required>
                <div class="invalid-feedback">
                    Este campo no puede quedar vacio, ni tener menos de 1 caracter.
                </div>
            <br>
            <br>
            <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

<!-- Modal editar medicamentos -->
<div class="modal fade" id="editarMedicamentoModal" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Medicamento</h5>
        <button type="button" id="cerraredit" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modaleditarmedicamento" class="needs-validation" novalidate>
            @csrf
            <label for="name"class="form-label">Nombre de Medicamento</label>
            <input id="inputeditnombre" type="text" class="form-control" name="name" autofocus>
            <div class="invalid-feedback">
                Este campo no puede quedar vacio.
            </div>
            <br>
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="cantidad form-control" id="inputeditcantidad" min="0" pattern="^[0-9]+$" data-bs-toggle="tooltip" title="Ingrese la cantidad, solo se permiten números" required>
                <div class="invalid-feedback">
                    Por favor, revise el formato del texto ingresado.
                </div>
            <br>
                <label for="precio">Precio</label>
                <span class="input-group-text">$</span><input id="inputeditprecio" type="text" class="form-control" name="precio" required minlength="1" pattern="^([0-9]?)*(\.\d{1,2})$" data-bs-toggle="tooltip" title="Ingrese el precio en el formato $00.00" required>
                <div class="invalid-feedback">
                    Este campo no puede quedar vacio, ni tener menos de 1 caracter.
                </div>
            <br>
            <br>
            <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
<!-- Script -->
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "responsive":true,
            "ajax": "{{route('medicamentos_data')}}",
            "type":"GET",
            "columns":[
                {data:'nombre'},
                {data:'cantidad'},
                {data:'precio'},
                {
                    "data": null,
                    render:function(data)
                    {
                    return "<button class='btn btn-warning' onclick='consultarData(" + data.id + ")'><i class='fa-solid fa-pen-to-square'></i> Editar</button> <button class='btn btn-danger' onclick='eliminarMedicamento(" + data.id + ")'><i class='fa-solid fa-trash-can'></i> Eliminar</button>";
                    }
                    //defaultContent: "<button class='btn btn-warning' onclick='prueba({data:'id'})'>Editar</button> / <button class='btn btn-danger'>Eliminar</button>"
                }
            ],

            "language":{
                "decimal":        ".",
                "emptyTable":     "No hay datos disponibles en la tabla",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty":      "Mostrando del 0 al 0 de un todal de 0 registros",
                "infoFiltered":   "(Filtrado de _MAX_ registros totales)",
                "lengthMenu":     "Mostrar _MENU_ registros por página",
                "loadingRecords": "Cargando...",
                "processing":     "",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontraron resultados",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "select": {
                    "rows": {
                        "1": "1 fila seleccionada",
                        "_": "%d filas seleccionadas"
                    }
                },
                
               
            } 
        });
        
    });


//js para envio por ajax para modal crear medicamento
$(document).ready(function() {
        $("#modalcrearmedicamento").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalcrearmedicamento");
        var valinputnombremedicamento = document.getElementById("inputnombre").value;
        var valinputcantidad = document.getElementById("inputcantidad").value;
        var valprecio = document.getElementById("inputprecio").value;

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
                    url:"{{route('crear_medicamento')}}",
                    type:"POST",
                    data:{
                        'NombreMedicamento': valinputnombremedicamento,
                        'Cantidad': valinputcantidad,
                        'Precio': valprecio,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        $('#inputnombre').val(null);
                        $('#inputcantidad').val(null);
                        $('#inputprecio').val(null);
                        $("#crearMedicamentoModal").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'creado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se creo registró correctamente el medicamento',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: test.mensaje,
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                
                Swal.fire('Se canceló el registro del medicamento', '', 'info')
            }
            })
        }
        });
    });

    
    $("#cerrar").click(function(){
            $("#modalcrearmedicamento")[0].reset();
    });

//consultar medicamento por id a través de ajax
function consultarData(id){
                $.ajax({
                    url:"{{route('consultarmedicamento')}}",
                    type:"GET",
                    data:{
                        'IdMedicamento': id,
                    },
                    //dataType:"json",
                    success: function(test){
                        $("#editarMedicamentoModal").modal("show");
                        //console.log(test);
                        document.getElementById("inputeditnombre").value = test.Medicamento[0].nombre;
                        document.getElementById("inputeditcantidad").value = test.Medicamento[0].cantidad;
                        document.getElementById("inputeditprecio").value = test.Medicamento[0].precio;
                        }
                    });

//js para editar usuario via ajax
 $(document).ready(function() {
        $("#modaleditarmedicamento").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modaleditarmedicamento");
        var valinputnombre = document.getElementById("inputeditnombre").value;
        var valinputcantidad = document.getElementById("inputeditcantidad").value;
        var valinputprecio = document.getElementById("inputeditprecio").value;

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
                    url:"{{route('editar_medicamento')}}",
                    type:"POST",
                    data:{
                        'NombreMedicamento': valinputnombre,
                        'CantidadMedicamento': valinputcantidad,
                        'IdMedicamento': id,
                        'PrecioMedicamento': valinputprecio,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("inputeditnombre").value="";
                        document.getElementById("inputeditcantidad").value="";
                        document.getElementById("inputeditprecio").value="";
                        $("#editarMedicamentoModal").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'actualizado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se actualizo correctamente el medicamento',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo actualizar el medicamento',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se canceló la actualización del medicamento', '', 'info')
            }
            })
        }
        });
    });
}
//js de función eliminar Medicamento
function eliminarMedicamento(id){
    Swal.fire({
        icon: 'warning',
        title: '¿Está seguro de realizar esta acción?',
        text: '¡No podrá revertir esto!',
        showCancelButton: true,
        confirmButtonText: 'Ok',
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:"{{route('eliminar_medicamento')}}",
                type:"POST",
                data:{
                    'IdMedicamento': id,
                    "_token": $("meta[name='csrf-token']").attr("content")
                },
                //dataType:"json",
                success: function(test){
                    $('#datatable').DataTable().ajax.reload();
                    if(test.estado === 'eliminado'){
                            Swal.fire({
                                icon: 'success',
                                title: 'Hecho!.',
                                text: 'Se eliminó correctamente el medicamento',
                                confirmButtonText: 'Ok',
                            })
                        }
                    if(test.estado === 'error'){
                            Swal.fire({
                                icon: 'error',
                                title: '¡Ocurrió un error!.',
                                text: 'No se pudo eliminar el medicamento correctamente',
                                confirmButtonText: 'Ok',
                            })
                        }
                    }
                });
        } else if (result.isDismissed) {
            Swal.fire('Se canceló la eliminación del medicamento', '', 'info')
        }
    })
}
</script>
@endsection