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
        <input id="inputnombre" type="text" class="form-control" name="NombreSigno2">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="SignosVitales();">Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
            function SignosVitales(){
                var inputsigno = document.getElementById("inputnombre");
                var valnombresigno = inputsigno.value;
                Swal.fire({
                    icon: 'info',
                    title: 'Confirmar.',
                    text: '¡Desea continuar?',
                    showCancelButton: true,
                    confirmButtonText: 'Ok',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"{{route('signos')}}",
                            type:"POST",
                            data:{
                                'NombreSigno': valnombresigno,
                                "_token": $("meta[name='csrf-token']").attr("content")
                            },
                            dataType:"json",
                            success: function(test){
                                inputsigno.value="";
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
            }
</script>
@endsection
