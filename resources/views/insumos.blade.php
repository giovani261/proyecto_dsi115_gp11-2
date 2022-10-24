@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Insumos</h4>
            </div>
            <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#crearInsumoModal" class="btn btn-primary"><i class="fa fa-medkit"></i> Agregar Insumos</a>
            <br>
           <br>
            <table class="table text-md-nowrap dt-responsive" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
 
<!-- Modal crear minsumos -->
<div class="modal fade" id="crearInsumoModal" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Insumos</h5>
        <button type="button" id="cerrar" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalcrearinsumo" class="needs-validation" novalidate>
            @csrf
            <label for="name"class="form-label">Nombre de Insumos</label>
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
                <label for="categoria"class="form-label">Nombre de la Categoria</label>
                <input id="inputcategoria" type="text" class="form-control" name="name" value="" pattern="[a-zA-Z\u00f1\u00d1'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el nombre, solo se permiten letras" required autofocus>
                <div class="invalid-feedback">
                    Este campo no puede quedar vacio.
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

<!-- Modal editar insumo -->
<div class="modal fade" id="editarInsumoModal" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Insumo</h5>
        <button type="button" id="cerraredit" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modaleditarinsumo" class="needs-validation" novalidate>
            @csrf
            <label for="name"class="form-label">Nombre de Insumo</label>
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
                <label for="categoria"class="form-label">Nombre de la Categoria</label>
                <input id="inputeditcategoria" type="text" class="form-control" name="name" value="" pattern="[a-zA-Z\u00f1\u00d1'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el nombre, solo se permiten letras" required autofocus>
                <div class="invalid-feedback">
                    Este campo no puede quedar vacio.
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
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.css" rel="stylesheet">
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "responsive":true,
            "ajax": "{{route('insumos_data')}}",
            "type":"GET",
            "columns":[
                {data:'nombre'},
                {data:'cantidad'},
                {data:'precio'},
                {data:'categoria'},
                {
                    "data": null,
                    render:function(data)
                    {
                    return "<button class='btn btn-warning' onclick='consultarData(" + data.id + ")'><i class='fa-solid fa-pen-to-square'></i> Editar</button>";
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


//js para envio por ajax para modal crear insumo
$(document).ready(function() {
        $("#modalcrearinsumo").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalcrearinsumo");
        var valinputnombreinsumo = document.getElementById("inputnombre").value;
        var valinputcantidad = document.getElementById("inputcantidad").value;
        var valprecio = document.getElementById("inputprecio").value;
        var valinputcategoriainsumo = document.getElementById("inputcategoria").value;

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
                    url:"{{route('crear_insumo')}}",
                    type:"POST",
                    data:{
                        'NombreInsumo': valinputnombreinsumo,
                        'Cantidad': valinputcantidad,
                        'Precio': valprecio,
                        'CategoriaInsumo': valinputcategoriainsumo,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        $('#inputnombre').val(null);
                        $('#inputcantidad').val(null);
                        $('#inputprecio').val(null);
                        $('#inputcategoria').val(null);
                        $("#crearInsumoModal").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'creado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se creo registró correctamente el insumo',
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
                
                Swal.fire('Se canceló el registro del insumo', '', 'info')
            }
            })
        }
        });
    });

    
    $("#cerrar").click(function(){
            $("#modalcrearinsumo")[0].reset();
    });

//consultar insumo por id a través de ajax
function consultarData(id){
                $.ajax({
                    url:"{{route('consultarinsumo')}}",
                    type:"GET",
                    data:{
                        'IdInsumo': id,
                    },
                    //dataType:"json",
                    success: function(test){
                        $("#editarInsumoModal").modal("show");
                        //console.log(test);
                        document.getElementById("inputeditnombre").value = test.Insumo[0].nombre;
                        document.getElementById("inputeditcantidad").value = test.Insumo[0].cantidad;
                        document.getElementById("inputeditprecio").value = test.Insumo[0].precio;
                        document.getElementById("inputeditcategoria").value = test.Insumo[0].categoria;
                        }
                    });

//js para editar insumo via ajax
 $(document).ready(function() {
        $("#modaleditarinsumo").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modaleditarinsumo");
        var valinputnombre = document.getElementById("inputeditnombre").value;
        var valinputcantidad = document.getElementById("inputeditcantidad").value;
        var valinputprecio = document.getElementById("inputeditprecio").value;
        var valinputcategoria = document.getElementById("inputeditcategoria").value;

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
                    url:"{{route('editar_insumo')}}",
                    type:"POST",
                    data:{
                        'NombreInsumo': valinputnombre,
                        'CantidadInsumo': valinputcantidad,
                        'IdInsumo': id,
                        'PrecioInsumo': valinputprecio,
                        'CategoriaInsumo': valinputcategoria,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("inputeditnombre").value="";
                        document.getElementById("inputeditcantidad").value="";
                        document.getElementById("inputeditprecio").value="";
                        document.getElementById("inputeditcategoria").value="";
                        $("#editarInsumoModal").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'actualizado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se actualizo correctamente el insumo',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo actualizar el insumo',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se canceló la actualización del insumo', '', 'info')
            }
            })
        }
        });
    });
}

</script>
@endsection 