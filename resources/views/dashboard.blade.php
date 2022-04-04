@extends('layouts.plantilla')

@section('contenido')
<br>
<div class="container-fluid containercardsdash">
    @isset($name)
        @foreach($name as $productname)
            <h1>{{ $productname }},</h1>
        @endforeach
    @endisset   
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
        <form action="{{route('signos')}}" method="post">
        @csrf
        <label for="inputnombre">Nombre</label>
        <input id="inputnombre" type="text" class="form-control" name="NombreSigno">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection
