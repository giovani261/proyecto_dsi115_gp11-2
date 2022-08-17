@extends('layouts.plantilla')

@section('contenido')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Unidad medica humana</title>
    <meta name="description" content="">


    <!-- Favicon.ico -->
    <link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Favicon.ico -->

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> este archivo es bootstrap 4, genera conflicto con los modal y la plantilla que se extiende debido a que usa bootstrap 5-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos4.css">

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <br>
    <style>
        .img-thumbnail asc1{
            height: 2%;
            width: 2%;
            }
        .img-thumbnail asc2{
            height: 5%;
            width: 5%;
        }
        .img-thumbnail asc3{
            height: 5%;
            width: 5%;
        }   
        .col{
            text-align: center; 
            display: inline-block;
        }
        .carousel-caption {
            background: #353d5d66;
            width: 100%;
            height: 13rem;
            left: 0;
            bottom: 0;
            padding: 1.25rem 1.30rem 3rem;
        }
        .carousel-caption h5 {
            color: white;
        }
        .carousel-item img {
            width: 1024px;
            height: 576px;
        }
    </style>
    <div class="row">
        <div class="col-xl-12">
            <center>
                    <h4>Asociaciones</h4>
                    <a href="http://asccelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc1.jpeg') }}" alt="asociacion 1" class="img-thumbnail asc1"></a>
                    <a href="https://www.acedes.net/" target="_blank"><img src="{{ asset('imgs/asc2.jpeg') }}" alt="asociacion 2" class="img-thumbnail asc2"></a>
                    <a href="https://www.ascgelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc3.jpeg') }}" alt="asociacion 3" class="img-thumbnail asc3"></a>
            </center>
            <br>
            <div class="section_title text-center mb-55">
                <h3>MEDICINA Y CIRUGÍA GASTROINTESTINAL <br>
                    J.V.P.M. 1668
                </h3>
                <p><strong>DR. RENE RODRÍGUEZ ROMERO.</strong></p>
            </div>
        </div>
    </div>

     <!--slider-->
     <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
           <div id="overflow">
              <div class="inner">
                 <div class="slide slide_1">
                    <div class="slide-content">
                        <img src="imgs/1.jpg" alt="">
                        <div class="texto">
                            <h5 style="color: black; line-height: 1.5em;">En la actualidad  las enfermedades gastrointestinales son muy frecuentes.<br>
                            Muchas de ellas son graves, pueden ser tratadas exitosamente si su <br> 
                            diagnóstico es oportuno y adecuado.</h5></div>
                    </div>
                 </div>
                 <div class="slide slide_2">
                    <div class="slide-content">
                        <img src="imgs/2.jpg" alt="">
                       <p>Content for Slide 2</p>
                    </div>
                 </div>
                 <div class="slide slide_3">
                    <div class="slide-content">
                        <img src="imgs/3.jpg" alt="">
                       <p>Content for Slide 3</p>
                    </div>
                 </div>
                 <div class="slide slide_4">
                    <div class="slide-content">
                        <img src="imgs/4.jpg" alt="">
                       <p>Content for Slide 4</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="controls">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           <label for="slide4"></label>
        </div>
        <div id="bullets">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           <label for="slide4"></label>
        </div>
     </div>
     <br>
    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Hospitalidad</h3>
                        <p>La excelencia clínica debe ser la prioridad para cualquier proveedor de servicios de atención m&#233;dica.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Cuidados de emergencia</h3>
                        <p>Dispuestos a brindarte una experiencia poxitiva desde el inicio, contando con el equipo necesario.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Servicio m&#233;dicos de excelencia</h3>
                        <p>Servicios m&#233;dicos con excelente tenci&#243;n accesible, eficiente pero sobretodo, humana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Nuestros servicios</h3>
                        <p>Contamos con varios servicios.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            
            
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imgs/department/1.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Gastritis y C&#225;ncer del Est&#243;mago</h5>
                                <p>La gastritis es un t&#233;rmino para un grupo de enfermedades con un punto en com&#250;n: 
                                la inflamaci&#243;n del revestimiento del est&#243;mago. El c&#225;ncer de est&#243;mago, es una 
                                enfermedad por la que se forman c&#233;lulas malignas en el revestimiento del est&#243;mago.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('gastritis');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/2.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Colitis y c&#225;ncer de colon</h5>
                                <p>La colitis ulcerativa es una enfermedad que causa inflamaci&#243;n y &#250;lceras.
                            El c&#225;ncer de colon es una enfermedad por la que se forman c&#233;lulas malignas en los tejidos del colon.</p>
                                <button type="button" class="btn btn-outline-light" 
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('colitis');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/3.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Estre&ntildeimiento y sangrado rectal</h5>
                                <p>El estreñimiento se caracteriza por las deposiciones poco frecuentes o la dificultad para evacuar.
                                El sangrado rectal leve tiene lugar cuando se refiere a la eliminaci&#243;n de unas pocas gotas de sangre de color rojo.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"     
                                        onclick="especialidad('estreñimiento');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/4.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Hemorroides</h5>
                                <p>Las hemorroides o almorranas son un conjunto de tejidos inflamados en la zona anal. Contienen vasos sangu&#237;neos,
                                 tejido conjuntivo, m&#250;sculo y fibras el&#225;sticas.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('hemorroides');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/5.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>C&#225;ncer recto y ano</h5>
                                <p>El c&#225;ncer del recto es un c&#225;ncer que comienza en el recto. El recto consiste en los &#250;ltimos 
                                cent&#237;metros del intestino grueso. El cáncer de ano es una enfermedad por la que se forman c&#233;lulas 
                                malignas en los tejidos del ano.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('cancer');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/6.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>H&#237;gado y cálculos en ves&#237;cula</h5>
                                <p>Los c&#225;lculos biliares son dep&#243;sitos endurecidos de fluido digestivo que se pueden 
                            formar en la ves&#237;cula biliar.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('higado');">Agendar cita</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/department/7.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Reflujo gastro-esof&#225;gico</h5>
                                <p>La enfermedad por reflujo gastroesof&#225;gico es una afecci&#243;n en la cual los contenidos estomacales se devuelven 
                            desde el est&#243;mago hacia el esófago. Los alimentos van desde la boca hasta el est&#243;mago a través del es&#243;fago.</p>
                                <button type="button" class="btn btn-outline-light"
                                        data-bs-toggle="modal" data-bs-target="#citaModal"
                                        onclick="especialidad('reflujo');">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->
<!-- Modal Agendar Cita-->
<div class="modal fade" id="citaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rservación de Citas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('reservarCita');"></button>
            </div>
            <div class="modal-body"> 
                <form method="POST" id="reservarCita" class="needs-validation" novalidate>
                @csrf
                <div class="from-group mb-3">
                    <label for="" class="text-dark">Nombre completo</label>
                    <input type="text" class="name form-control" id="inputnombre" pattern="[a-zA-Z'-'\s]*" required>
                    <div class="invalid-feedback">
                    Por favor, revise el formato del texto ingresado.
                    </div>
                </div>
                <div class="from-group mb-3">
                    <label for="" class="text-dark">Telefono</label>
                    <input type="text" class="phone form-control" id="inputTelefono" pattern="[0-9]{8}" required>
                    <div class="invalid-feedback">
                    Por favor, revise el formato del texto ingresado.
                    </div>
                </div>
                <label for="" class="text-dark">Fecha</label>
                <div class="input-group date">
                    <input type="text" class="date form-control" id="inputfecha" autocomplete="off" required>
                    <i class="fa-solid fa-calendar-days calendario"></i>
                    <div class="invalid-feedback">
                    Este campo no puede quedar vacio.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="removevalidateform('reservarCita');">Cancelar</button>
            </div></form>  
        </div>
    </div>
</div>
<!-- Fin Modal Agendar Cita-->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
        <hr>
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true" style="text-shadow: 5px 5px 5px #de1a22; font-size: 24px;">Excelentes Servicios.</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                            aria-selected="false" style="text-shadow: 5px 5px 5px #de1a22; font-size: 24px;">Medico calificado.</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                            aria-selected="false" style="text-shadow: 5px 5px 5px #de1a22; font-size: 23px;">Equipo moderno.</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="container">
            <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <i class="flaticon-first-aid-kit"></i>
                                                    </div>
                                                        <div class="department_content">
                                                            <h3>Unidad M&#233;dica Humana.</h3>
                                                            <p style="font-size: 15px;"> Ofrecemos consulta para el diagn&#243;stico y prevenci&#243;n de las enfermedades
                                                                del aparato digestivo.<br><br>
                                                                Dr. Ren&#233; Rodr&#237;guez es un m&#233;dico capacitado con experiencia en el manejo de enfermedades del tracto
                                                                gastrointestinal y el h&#237;gado.
                                                                Cualquier tipo de informaci&#243;n adional, con gusto le corresponderemos.
                                                                Haga su cita o contactemos en nuestras redes sociales.                
                                                            </p>
                                                        </div>   
                                                    <div class="modal-footer" style="text-align: right;">
                                                        <a href="#href" type="submit" class="btn btn-primary"><i class="fa-solid fa-calendar-days"></i> Haz tu cita</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="imgs/about/business.jpg" alt="" style="width: 80%; height: 20%;">
                                                </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
    
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!--<script src="js/vendor/jquery-1.12.4.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    <!--slider-->

</body>
</html>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script>
    $(document).ready(function() {
        var datesForDisable = ["2022-06-03", "08-10-2021", "08-15-2021", "08-20-2021"]; 
            $('#inputfecha').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                daysOfWeekDisabled: [0], //inhabilita días domingos
                startDate: new Date(),//Inhabilita fechas anteriores a la actual
                weekStart: [1],//Establece incicio de semana en lunes
                datesDisabled: datesForDisable,
                language: 'es'
            });
    });
    function especialidad(tipo){
    //console.log(tipo);
    $(document).ready(function(){
        $("#reservarCita").submit(function(e){
            e.preventDefault();
            //console.log(tipoesp);
            var element = document.getElementById("reservarCita");
            var valinputnombre = document.getElementById("inputnombre").value;
            var valinputTelefono = document.getElementById("inputTelefono").value;
            var valinputfecha = document.getElementById("inputfecha").value;
            //var valinputhora = document.getElementById("inputhora").value;
            var valinputespecialidad = tipo;
            //console.log(valinputnombre);
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
                    url:"{{route('reserva')}}",
                    type:"POST",
                    data:{
                        'NombrePaciente': valinputnombre,
                        'Telefono': valinputTelefono,
                        'Fecha': valinputfecha,
                        'Especialidad': valinputespecialidad,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        //document.getElementById("inputnombre").value="";
                        element.classList.remove("was-validated");
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho!.',
                            text: 'Se reservo correctamente su cita ' +test.nombrePaciente+', espere la confirmacion, le llamaremos lo antes posible',
                            confirmButtonText: 'Ok',
                            })
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro la reserva de su cita médica', '', 'info')
            }
            })
        }
        });
    });
}
</script>
@endsection
