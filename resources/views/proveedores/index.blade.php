@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4>Proveedores</h4>
            </div>
            <br>
            <a href="#" data-bs-toggle="modal" data-bs-target="#crearProveedor" class="btn btn-primary"><i
                    class="fa-solid fa-user-plus"></i> Agregar Proveedor</a>
            <br>
            <br>
            <table class="table text-md-nowrap" id="datatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Modal crear proveedor -->
<div class="modal fade" id="crearProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="removevalidateform('modalCrearProveedor');removecheck('modalCrear');">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="modalCrearProveedor" class="needs-validation" novalidate>
                    @csrf
                    <label for="nombre">{{ __('Nombre') }}</label>
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"
                        required autocomplete="off" autofocus>
                    <div class="invalid-feedback">
                        Este campo no puede quedar vacio.
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
<!-- Modal editar usuarios -->
<!-- <div class="modal fade" id="editarProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="removevalidateform('modalEditarProveedor');removecheck('modalEditar');">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="modalEditarProveedor" class="needs-validation" novalidate>
                    @csrf
                    <label for="nombre">{{ __('Nombre') }}</label>
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"
                        required autocomplete="off" autofocus>
                    <div class="invalid-feedback">
                        Este campo no puede quedar vacio.
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
    </div> -->

    <div class="modal fade" id="editarProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="removevalidateform('modalEditarProveedor');removecheck('modalCrear');">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="modalEditarProveedor" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <label for="nombre">{{ __('Nombre') }}</label>
                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"
                        required autocomplete="off" autofocus>
                    <div class="invalid-feedback">
                        Este campo no puede quedar vacio.
                    </div>
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
    <script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "responsive": true,
                ajax: "{{route('proveedores_data')}}",
                type: "GET",
                cache: false,
                "columns": [
                    { data: 'nombre' },
                    {
                        "data": null,
                        render: function (data) {
                            console.log("data",data);
                            return "<button class='btn btn-warning'><i class='fa-solid fa-pen-to-square'></i> Editar</button> <button class='btn btn-danger' onclick='eliminarProveedor(" + data.id + ")'><i class='fa-solid fa-trash-can'></i> Eliminar</button>";
                        }
                        //defaultContent: "<button class='btn btn-warning' onclick='prueba({data:'id'})'>Editar</button> / <button class='btn btn-danger'>Eliminar</button>"
                    }
                ],

                "language": {
                    "decimal": ".",
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando del 0 al 0 de un todal de 0 registros",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "loadingRecords": "Cargando...",
                    "processing": "",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron resultados",
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

        function removecheck(modal) {
            if (modal === "modalEditar") {
                $('#AdministradorCheck').prop('checked', false);
                $('#SecretariaCheck').prop('checked', false);
                $('#AsistenteCheck').prop('checked', false);
            }
            if (modal === "modalCrear") {
                $('#AdministradorCrearCheck').prop('checked', false);
                $('#SecretariaCrearCheck').prop('checked', false);
                $('#AsistenteCrearCheck').prop('checked', false);
            }
        }


            //js para envio por ajax para la ventana de editar usuario
            $(document).ready(function () {
                $("#modalEditarProveedor").submit(function (e) {
                    e.preventDefault();
                    var element = document.getElementById("modalEditarProveedor");
                    var valinputnombreusuario = document.getElementById("inputnombreusuario").value;
                    var valinputcorreo = document.getElementById("inputcorreousuario").value;
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
                    if ($('#AdministradorCheck').is(':checked') == false) {
                        rolesUnassign.push("administrador");
                    }
                    if ($('#SecretariaCheck').is(':checked') == false) {
                        rolesUnassign.push("secretaria");
                    }
                    if ($('#AsistenteCheck').is(':checked') == false) {
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
                                    url: "{{route('editar_usuario')}}",
                                    type: "POST",
                                    data: {
                                        'NombreUsuario': valinputnombreusuario,
                                        'CorreoUsuario': valinputcorreo,
                                        'IdUsuario': id,
                                        'RolesAssign': rolesAssign,
                                        'RolesUnassign': rolesUnassign,
                                        "_token": $("meta[name='csrf-token']").attr("content")
                                    },
                                    //dataType:"json",
                                    success: function (test) {
                                        element.classList.remove("was-validated");
                                        document.getElementById("inputnombreusuario").value = "";
                                        document.getElementById("inputcorreousuario").value = "";
                                        $("#editarProveedor").modal("hide");
                                        $('#datatable').DataTable().ajax.reload();

                                        if (test.estado === 'actualizado') {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Hecho!.',
                                                text: 'Se actualizo correctamente el usuario',
                                                confirmButtonText: 'Ok',
                                            })
                                        }
                                        if (test.estado === 'error') {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Ocurrio un error!.',
                                                text: 'No se pudo actualizar el usuario',
                                                confirmButtonText: 'Ok',
                                            })
                                        }
                                    }
                                });
                            } else if (result.isDismissed) {
                                Swal.fire('Se cancelo la actualizacion del usuario', '', 'info')
                            }
                        })
                    }
                });
            });
        
        //js para envio por ajax para la ventana de crear usuario
        // $(document).ready(function () {
        //     $("#modalCrearProveedor").submit(function (e) {
        //         e.preventDefault();
        //         var element = document.getElementById("modalCrearProveedor");
        //         var valinputnombreusuario = document.getElementById("name").value;
        //         var valinputcorreo = document.getElementById("email").value;
        //         var valcontra = document.getElementById("password").value;
        //         var valcontraconfirm = document.getElementById("password-confirm").value;
        //         var rolesAssign = [];

        //         //Asignar roles cuando esta marcado el checkbox
        //         if ($('#AdministradorCrearCheck').is(':checked')) {
        //             rolesAssign.push("administrador");
        //         }
        //         if ($('#SecretariaCrearCheck').is(':checked')) {
        //             rolesAssign.push("secretaria");
        //         }
        //         if ($('#AsistenteCrearCheck').is(':checked')) {
        //             rolesAssign.push("asistente");
        //         }

        //         if (element.checkValidity() === true) {
        //             Swal.fire({
        //                 icon: 'info',
        //                 title: 'Confirmar.',
        //                 text: '¿Desea continuar?',
        //                 showCancelButton: true,
        //                 confirmButtonText: 'Ok',
        //             }).then((result) => {
        //                 if (result.isConfirmed) {
        //                     $.ajax({
        //                         url: "{{route('crear_usuario')}}",
        //                         type: "POST",
        //                         data: {
        //                             'NombreUsuario': valinputnombreusuario,
        //                             'CorreoUsuario': valinputcorreo,
        //                             'ContraseñaUsuario': valcontra,
        //                             'ContraseñaConfirmUsuario': valcontraconfirm,
        //                             'RolesAssign': rolesAssign,
        //                             "_token": $("meta[name='csrf-token']").attr("content")
        //                         },
        //                         //dataType:"json",
        //                         success: function (test) {
        //                             element.classList.remove("was-validated");
        //                             document.getElementById("name").value = "";
        //                             document.getElementById("email").value = "";
        //                             document.getElementById("password").value = "";
        //                             document.getElementById("password-confirm").value = "";
        //                             removecheck('modalCrear');
        //                             $("#crearProveedor").modal("hide");
        //                             $('#datatable').DataTable().ajax.reload();

        //                             if (test.estado === 'creado') {
        //                                 Swal.fire({
        //                                     icon: 'success',
        //                                     title: 'Hecho!.',
        //                                     text: 'Se creo correctamente el usuario',
        //                                     confirmButtonText: 'Ok',
        //                                 })
        //                             }
        //                             if (test.estado === 'error') {
        //                                 Swal.fire({
        //                                     icon: 'error',
        //                                     title: 'Ocurrio un error!.',
        //                                     text: test.mensaje,
        //                                     confirmButtonText: 'Ok',
        //                                 })
        //                             }
        //                         }
        //                     });
        //                 } else if (result.isDismissed) {
        //                     Swal.fire('Se cancelo la creacion del usuario', '', 'info')
        //                 }
        //             })
        //         }
        //     });
        // });

        // function eliminarProveedor(id) {
        //     Swal.fire({
        //         icon: 'warning',
        //         title: '¿Estas seguro que deseas realizar esta accion?',
        //         text: '¡No podras revertir esto!',
        //         showCancelButton: true,
        //         confirmButtonText: 'Ok',
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 url: "{{route('eliminar_usuario')}}",
        //                 type: "POST",
        //                 data: {
        //                     'IdUsuario': id,
        //                     "_token": $("meta[name='csrf-token']").attr("content")
        //                 },
        //                 //dataType:"json",
        //                 success: function (test) {
        //                     $('#datatable').DataTable().ajax.reload();

        //                     if (test.estado === 'eliminado') {
        //                         Swal.fire({
        //                             icon: 'success',
        //                             title: 'Hecho!.',
        //                             text: 'Se elimino correctamente el usuario',
        //                             confirmButtonText: 'Ok',
        //                         })
        //                     }
        //                     if (test.estado === 'error') {
        //                         Swal.fire({
        //                             icon: 'error',
        //                             title: 'Ocurrio un error!.',
        //                             text: 'No se pudo eliminar el usuario correctamente',
        //                             confirmButtonText: 'Ok',
        //                         })
        //                     }
        //                 }
        //             });
        //         } else if (result.isDismissed) {
        //             Swal.fire('Se cancelo la eliminacion del usuario', '', 'info')
        //         }
        //     })
        // }
    </script>
    @endsection