@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Proveedor</h4>
            </div>
            <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#crearProveedorModalCenter" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Agregar Proveedor</a>
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
<!-- Modal crear proveedores -->
<div class="modal fade" id="crearProveedorModalCenter" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalcrearproveedor');removecheck('modalCrear');">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalcrearproveedor" class="needs-validation" novalidate>
            @csrf
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <div class="invalid-feedback">
                Este campo no puede quedar vacio.
            </div>
            <br>
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required autocomplete="email">
            <div class="invalid-feedback">
                Por favor, revise el formato del texto ingresado.
            </div>
            <br>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required minlength="8" autocomplete="new-password">
            <div class="invalid-feedback">
                Este campo no puede quedar vacio, ni tener menos de 8 caracteres.
            </div>
            <br>
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required minlength="8" autocomplete="new-password">
            <div class="invalid-feedback">
                Este campo no puede quedar vacio, ni tener menos de 8 caracteres.
            </div>
            <br>
            <label>Roles</label>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="AdministradorCrearCheck">
                <label class="form-check-label" for="AdministradorCheck">
                    Administrador
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="SecretariaCrearCheck">
                <label class="form-check-label" for="SecretariaCheck">
                    Secretaria
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="AsistenteCrearCheck">
                <label class="form-check-label" for="AsistenteCheck">
                    Asistente
                </label>
            </div>
            <br>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
<!-- Modal editar proveeedores -->
<div class="modal fade" id="editarProveedorModalCenter" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modaleditarproveedor');removecheck('modalEditar');">
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modaleditarproveedor" class="needs-validation" novalidate>
        @csrf
            <label for="inputnombreproveedor">Nombre</label>
            <input type="text" class="form-control" id="inputnombreproveedor" name="nombreproveedor" required>
            <div class="invalid-feedback">
                Este campo no puede quedar vacio.
            </div>
            <br>
            <label for="inputcorreoproveedor">Correo Electronico</label>
            <input type="text" class="form-control" id="inputcorreoproveedor" name="correoproveedor" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            <div class="invalid-feedback">
                Por favor, revise el formato del texto ingresado.
            </div>
            <br>
            <label>Roles</label>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="AdministradorCheck">
                <label class="form-check-label" for="AdministradorCheck">
                    Administrador
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="SecretariaCheck">
                <label class="form-check-label" for="SecretariaCheck">
                    Secretaria
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="AsistenteCheck">
                <label class="form-check-label" for="AsistenteCheck">
                    Asistente
                </label>
            </div>
        </div>

            <div class="modal-footer">
            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
        </form>
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
    $(document).ready(function () {
        $('#datatable').DataTable({
            "responsive":true,
            "ajax": "{{route('proveedores_data')}}",
            "type":"GET",
            "columns":[
                {data:'name'},
                {data:'email'},
                {data:'created_at'},
                {data:'updated_at'},
                {
                    "data": null,
                    render:function(data)
                    {
                    return "<button class='btn btn-warning' onclick='consultarProveedor(" + data.id + ")'><i class='fa-solid fa-pen-to-square'></i> Editar</button> <button class='btn btn-danger' onclick='eliminarProveedor(" + data.id + ")'><i class='fa-solid fa-trash-can'></i> Eliminar</button>";
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

function removecheck(modal){
    if(modal === "modalEditar"){
        $('#AdministradorCheck').prop('checked', false);
        $('#SecretariaCheck').prop('checked', false);
        $('#AsistenteCheck').prop('checked', false);
    }
    if(modal === "modalCrear"){
        $('#AdministradorCrearCheck').prop('checked', false);
        $('#SecretariaCrearCheck').prop('checked', false);
        $('#AsistenteCrearCheck').prop('checked', false);
    }
}

function consultarProveedor(id){
                $.ajax({
                    url:"{{route('consultarproveedoresajax')}}",
                    type:"GET",
                    data:{
                        'IdProveedor': id,
                    },
                    //dataType:"json",
                    success: function(test){
                        $("#editarProveedorModalCenter").modal("show");
                        //console.log(test);
                        document.getElementById("inputnombreproveedor").value = test.Proveedor[0].name;
                        document.getElementById("inputcorreproveedor").value = test.Proveedor[0].email;
                        for(var i=0;i<=test.Proveedor[0].roles.length-1;i++){
                            //console.log(test.Proveedor[0].roles[i].name);
                            if(test.Proveedor[0].roles[i].name == "administrador"){
                                $('#AdministradorCheck').prop('checked', true);
                            }
                            if(test.Proveedor[0].roles[i].name == "secretaria"){
                                $('#SecretariaCheck').prop('checked', true);
                            }
                            if(test.Proveedor[0].roles[i].name == "asistente"){
                                $('#AsistenteCheck').prop('checked', true);
                            }
                        } 
                        }
                    });

 //js para envio por ajax para la ventana de editar proveedor
 $(document).ready(function() {
        $("#modaleditarproveedor").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modaleditarproveedor");
        var valinputnombreproveedor = document.getElementById("inputnombreproveedor").value;
        var valinputcorreo = document.getElementById("inputcorreoproveedor").value;
        var rolesAssign = [];
        var rolesUnassign = [];

        //Asignar roles cuando esta marcado el checkbox
        if ($('#AdministradorCheck').is(':checked')) {
           rolesAssign.push("administrador");
        }
        if ($('#SecretariaCheck').is(':checked')) {
           rolesAssign.push("secretaria");
        }
        if ($('#AsistenteCheck').is(':checked')) {
           rolesAssign.push("asistente");
        }

        //Quitar roles cuando esta desmarcado el checkbox
        if ($('#AdministradorCheck').is(':checked')==false) {
           rolesUnassign.push("administrador");
        }
        if ($('#SecretariaCheck').is(':checked')==false) {
            rolesUnassign.push("secretaria");
        }
        if ($('#AsistenteCheck').is(':checked')==false) {
            rolesUnassign.push("asistente");
        }

        if (element.checkValidity() === true) { 
            console.log(rolesAssign);   
            console.log(rolesUnassign);     
        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('editar_proveedor')}}",
                    type:"POST",
                    data:{
                        'NombreProveedor': valinputnombreproveedor,
                        'CorreoProveedor': valinputcorreo,
                        'IdProveedor': id,
                        'RolesAssign': rolesAssign,
                        'RolesUnassign': rolesUnassign,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("inputnombreproveedor").value="";
                        document.getElementById("inputcorreoproveedor").value="";
                        $("#editarProveedorModalCenter").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'actualizado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se actualizo correctamente el proveedor',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo actualizar el proveedor',
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo la actualizacion del proveedor', '', 'info')
            }
            })
        }
        });
    });
}
//js para envio por ajax para la ventana de crear proveedor
$(document).ready(function() {
        $("#modalcrearproveedor").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalcrearproveedor");
        var valinputnombreproveedor = document.getElementById("name").value;
        var valinputcorreo = document.getElementById("email").value;
        var valcontra = document.getElementById("password").value;
        var valcontraconfirm = document.getElementById("password-confirm").value;
        var rolesAssign = [];

        //Asignar roles cuando esta marcado el checkbox
        if ($('#AdministradorCrearCheck').is(':checked')) {
           rolesAssign.push("administrador");
        }
        if ($('#SecretariaCrearCheck').is(':checked')) {
           rolesAssign.push("secretaria");
        }
        if ($('#AsistenteCrearCheck').is(':checked')) {
           rolesAssign.push("asistente");
        }

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
                    url:"{{route('crear_proveedor')}}",
                    type:"POST",
                    data:{
                        'NombreProveedor': valinputnombreproveedor,
                        'CorreoProveedor': valinputcorreo,
                        'ContraseñaProveedor': valcontra,
                        'ContraseñaConfirmProveedor': valcontraconfirm,
                        'RolesAssign': rolesAssign,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("name").value="";
                        document.getElementById("email").value="";
                        document.getElementById("password").value="";
                        document.getElementById("password-confirm").value="";
                        removecheck('modalCrear');
                        $("#crearProveedorModalCenter").modal("hide");
                        $('#datatable').DataTable().ajax.reload();

                        if(test.estado === 'creado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se creo correctamente el proveedor',
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
                Swal.fire('Se cancelo la creacion del proveedor', '', 'info')
            }
            })
        }
        });
    });

function eliminarProveedor(id){
    Swal.fire({
        icon: 'warning',
        title: '¿Estas seguro que deseas realizar esta accion?',
        text: '¡No podras revertir esto!',
        showCancelButton: true,
        confirmButtonText: 'Ok',
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:"{{route('eliminar_proveedor')}}",
                type:"POST",
                data:{
                    'IdProveedor': id,
                    "_token": $("meta[name='csrf-token']").attr("content")
                },
                //dataType:"json",
                success: function(test){
                    $('#datatable').DataTable().ajax.reload();

                    if(test.estado === 'eliminado'){
                            Swal.fire({
                                icon: 'success',
                                title: 'Hecho!.',
                                text: 'Se elimino correctamente el proveedor',
                                confirmButtonText: 'Ok',
                            })
                        }
                    if(test.estado === 'error'){
                            Swal.fire({
                                icon: 'error',
                                title: 'Ocurrio un error!.',
                                text: 'No se pudo eliminar el proveedor correctamente',
                                confirmButtonText: 'Ok',
                            })
                        }
                    }
                });
        } else if (result.isDismissed) {
            Swal.fire('Se cancelo la eliminacion del proveedor', '', 'info')
        }
    })
}
</script>
@endsection




