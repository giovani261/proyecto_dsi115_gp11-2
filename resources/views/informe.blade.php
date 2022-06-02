@extends('layouts.plantilla')

@section('contenido')

<!-- Favicon.ico -->
<link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
<!-- Favicon.ico -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <br>
            <!-- Card Signos a borrar-->
            <div class="card" style="max-width: 18rem;">
                <div class="card-header text-primary"><center><b>Consultas subsecuentes</b></center></div>
                    <div class="card-body">
                        <a class="acards text-primary" href="/signos-informes">
                            <div class="container">
                                <center>
                                    <div class="row">
                                        <div class="col my-auto">
                                            Informes de consultas subsecuentes
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
            <br>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@endsection
