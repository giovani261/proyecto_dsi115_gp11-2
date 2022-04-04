<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Unidad clinica humana</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap sidebar)-->
        <link href="{{ asset('../resources/css/sidebar.css') }}" rel="stylesheet" />
        <!-- Css propio-->
        <link href="{{ asset('../resources/css/estilos3.css') }}" rel="stylesheet" />
        <!-- Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="loading-container">
            <div class="loading"></div>
            <div class="loading-text">Cargando...</div>
        </div>
        <div class="d-flex relative" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Img</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/proyecto_dsi115_gp11/public/dashboard"><i class="fa-solid fa-gauge fa-xl"></i> Panel de control</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-calendar-days fa-xl"></i> Agendar cita</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-users fa-xl"></i> Gestion de usuarios</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-hammer fa-xl"></i> Gestion de insumos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-briefcase-medical fa-xl"></i> <span class="txtmenu"> Gestion de medicamentos</span></a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-clipboard-list fa-xl"></i> Gestion de proveedores</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa-solid fa-chart-area fa-xl"></i> Generar reporte</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/proyecto_dsi115_gp11/public/db">Prueba DB</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper"> 
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn" id="sidebarToggle"><i class="fa-solid fa-bars fa-xl"></i></button>
                        <a class="ahome" href="#!"><i class="fa-solid fa-user-doctor fa-xl"></i> MEDICINA Y CIRUGIA GASTROINTESTINAL</a> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-xl"></i> Nombre</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesion</a>
                                        <!-- <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a> -->
                                    </div>
                                </li>
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
            <div class="container">
                <div class="col-sm-9">
                    <div style="float:left; padding:0 30px 0 0" class="navbar-brand2">
                    <a href="">
                        <img src="https://www.ues.edu.sv/themes/UES-THEME/assets/images/ues_logo3.svg" alt="logo">
                    </a>
                    </div>
                    <div>2021 Universidad de El Salvador. </br> 
                        Ciudad Universitaria "Dr. Fabio Castillo Figueroa",</br>Final de Av.Mártires y Héroes del 30 julio, San Salvador, </br> El Salvador, América Central. Teléfonos: +(503) 2511-2000. Todos los derechos reservados.
                    </div>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#inicio"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="https://www.ues.edu.sv/blog/post/croquis-sede-central-"><i class="fas fa-map-marked-alt"></i> Mapa del Sitio</a></li>
                        
                    </ul>
                </div>
            </div>
       </footer>

        <script src="{{ asset('../resources/js/scripts2.js') }}"></script>

        @include('sweetalert::alert')
    </body>
</html>
