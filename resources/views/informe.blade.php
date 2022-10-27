@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->
<div class="container-fluid containercardsdash">
        <div class="row">
            <div class="col-md-12">
                <br>
                <!-- Card Citas médicas informe-->
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Citas médicas</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/citas-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informes citas médicas
                                            </div>
                                            <div class="col-md-auto my-auto">
                                                <i class="fa-solid fa-heart-pulse fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <!-- Card Signos informes-->
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Consultas subsecuentes</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/signos-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informes consultas subsecuentes
                                            </div>
                                            <div class="col-md-auto my-auto">
                                                <i class="fa-solid fa-heart-pulse fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Pacientes</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/pacientes-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informes de pacientes
                                            </div>
                                            <div class="col-md-auto my-auto">
                                                <i class="fa-solid fa-heart-pulse fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Personal de la clinica</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/personal-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informe del<br> personal
                                            </div>
                                            <div class="col-md-auto my-auto">
                                            <i class="fa-sharp fa-solid fa-user-tie fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Insumos de la clinica</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/insumos-informes">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informe de<br> Insumos Médicos
                                            </div>
                                            <div class="col-md-auto my-auto">
                                            <i class="fa-sharp fa-solid fa-user-tie fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Proveedores</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/proveedor-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informe de proveedores
                                            </div>
                                            <div class="col-md-auto my-auto">
                                                <i class="fa-solid fa-heart-pulse fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header text-danger"><center><b>Recetas</b></center></div>
                        <div class="card-body">
                            <a class="acards text-black" href="/recetas-informe">
                                <div class="container">
                                    <center>
                                        <div class="row">
                                            <div class="col my-auto">
                                                Informe de recetas
                                            </div>
                                            <div class="col-md-auto my-auto">
                                                <i class="fa-solid fa-heart-pulse fa-4x" style="color:#DC3545"></i>
                                            </div>
                                        </div>
                                    </center>
                                </div>   
                            </a>
                        </div>
                </div>
                <br>
            </div>
        </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@endsection
