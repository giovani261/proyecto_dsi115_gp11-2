<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Unidad medica humana</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap sidebar)-->
        <!-- <link href="{{ asset('../resources/css/sidebar.css') }}" rel="stylesheet" /> -->
        <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" />
        <!-- Css propio-->
        <!-- <link href="{{ asset('../resources/css/estilos3.css') }}" rel="stylesheet" /> -->
        <link href="{{ asset('css/estilos3.css') }}" rel="stylesheet" />
        <!-- Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap datepicker css cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- select2 css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Bootstrap js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- sweet alert cdn -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- bootstrap datepicker js cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- select2 js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </head>
    <body>
        <div class="loading-container">
            <div class="loading"></div>
            <div class="loading-text">Cargando...</div>
        </div>
        <div class="d-flex relative" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">
                    <center><img src="{{ asset('imgs/logo.jpeg') }}" alt="logo" class="img-thumbnail logo"></center>
                </div>
                <div class="list-group list-group-flush">
                    @role('administrador')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard"><i class="fa-solid fa-gauge fa-xl"></i> Panel de control</a>
                    @endrole
                    @role('administrador|secretaria')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-calendar-days fa-xl"></i> Agendar cita</a>
                    @endrole
                    @role('administrador')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-users fa-xl"></i> Gestion de usuarios</a>
                    @endrole
                    @role('administrador|secretaria|asistente')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-hammer fa-xl"></i> Gestion de insumos</a>
                    @endrole
                    @role('administrador|secretaria|asistente')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-briefcase-medical fa-xl"></i> <span class="txtmenu"> Gestion de medicamentos</span></a>
                    @endrole
                    @role('administrador')
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-clipboard-list fa-xl"></i> Gestion de proveedores</a>
                        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-chart-area fa-xl"></i> Generar reporte</a>
                    @endrole
                    <!-- Para todos, incluidos los usuarios sin cuenta-->
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/"><i class="fa-solid fa-clipboard-list fa-xl"></i> Servicios</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper"> 
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn" id="sidebarToggle" onclick="iconbar();"><i class="fa-solid fa-bars fa-xl"></i></button>
                        <a class="ahome" href="#!"><i class="fa-solid fa-user-doctor fa-xl"></i> Unidad medica humana</a> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                @auth
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-xl"></i> {{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-right-from-bracket"></i> {{ __('Cerrar Sesion') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            <!-- <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Something else here</a> -->
                                        </div>
                                    </li>
                                @endauth
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> {{ __('Login') }}</a>
                                        </li>
                                    @endif
                                @endguest
                            </ul> 
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                @yield('contenido')
            </div> 
        </div>

        <footer id="footer" class="midnight-blue">
            <br>
            <center>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div>
                            <h3>Contactos</h3>        
                            <a href="https://twitter.com/rene_romer" class="twitterlink" target="_blank">
                                <i class="fa-brands fa-twitter twittericon"></i>
                                <br>
                                @rene_romer
                            </a>
                        </div>
                        <br>
                        <span class="fbspan">   
                                <i class="fa-brands fa-facebook fbicon"></i>
                                <br>
                                <a href="https://www.facebook.com/UNIDADMEDICAHUMANA/" class="fblink" target="_blank">/UNIDADMEDICAHUMANA</a>
                                <br>
                                <a href="https://www.facebook.com/rene.r.romero.7" class="fblink" target="_blank">/rene.r.romero.7</a>
                        </span>
                        <br>
                    </div>
                    <div class="col">
                        <h3>Unidad Medica Humana</h3>
                        <br>
                        <p><i class="fa-solid fa-map-location-dot"></i> 23 Av. Nte. # 1318. Col. Medica. Contiguo Hospital PNC</p>
                        <br>
                        <p><i class="fa-solid fa-phone"></i> TEL.: 2519-3909</p>
                        <br>
                        <p><i class="fa-solid fa-window-maximize"></i> https://unidad-medica-humana.herokuapp.com/</p>
                        <br>
                        <p><i class="fa-solid fa-envelope"></i> drrodriguezromero@gmail.com</p>
                    </div>
                    <div class="col">
                        <h3>Asociaciones</h3>
                        <a href="http://asccelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc1.jpeg') }}" alt="asociacion 1" class="img-thumbnail asc1"></a>
                        <a href="https://www.acedes.net/" target="_blank"><img src="{{ asset('imgs/asc2.jpeg') }}" alt="asociacion 2" class="img-thumbnail asc2"></a>
                        <a href="https://www.ascgelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc3.jpeg') }}" alt="asociacion 3" class="img-thumbnail asc3"></a>
                    </div>
                </div>
            </div>
            </center>
       </footer>

        <script src="{{ asset('js/scripts2.js') }}"></script>
        <!-- incluye el paquete, para mostar alertas desde los controladores -->
        @include('sweetalert::alert')
        @yield('scripts')
    </body>
</html>
