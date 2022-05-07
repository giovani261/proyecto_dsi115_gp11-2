@extends('layouts.plantilla')

@section('contenido')
<<<<<<< HEAD
<br>
<center><h1>Pagina de servicios</h1></center> 
@endsection
=======

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Unidad medica humana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon.ico -->
    <link rel="shortcut icon" type="image/x-icon" href="imgs/logo.jpeg">
    <!-- Favicon.ico -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="col">   
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
                </style> 
                <h4>Asociaciones</h4>
                <a href="http://asccelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc1.jpeg') }}" alt="asociacion 1" class="img-thumbnail asc1"></a>
                <a href="https://www.acedes.net/" target="_blank"><img src="{{ asset('imgs/asc2.jpeg') }}" alt="asociacion 2" class="img-thumbnail asc2"></a>
                <a href="https://www.ascgelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc3.jpeg') }}" alt="asociacion 3" class="img-thumbnail asc3"></a>
            </div>

            <div class="section_title text-center mb-55">
                <h3>MEDICINA Y CIRUGÍA GASTROINTESTINAL <br>
                    J.V.P.M. 1668
                </h3>
                <p><strong>DR. RENE RODRÍGUEZ ROMERO.</strong></p>
            </div>
        </div>
    </div>
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
                        <p>La excelencia clínica debe ser la prioridad para cualquier proveedor de servicios de atención médica.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Cuidados de emergencia</h3>
                        <p>La excelencia clínica debe ser la prioridad para cualquier proveedor de servicios de atención médica.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>poner algo mas</h3>
                        <p>La excelencia clínica debe ser la prioridad para cualquier proveedor de servicios de atención médica.</p>
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
                        <p>Contamos que varios servicios.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/1.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Gastritis y Cáncer del Estomago</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/2.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Colitis y cáncer de colon</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/3.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Estreñimiento y sangrado rectal</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/4.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Hemorroides</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/5.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Cáncer recto y ano</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/6.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Hígado y cálculos en vesícula</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="imgs/department/7.jpg" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Reflujo gastro-esofágico</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

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
                            aria-selected="true">Excelentes Servicios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                            aria-selected="false">Medico calificado</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                            aria-selected="false">Equipo necesario</a>
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
                                                    <h3>Leading edge care for Your family</h3>
                                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                                        reasonable projecting expression.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="imgs/about/business.png" alt="">
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
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
</body>
</html>

@endsection
>>>>>>> 705a12035394079f14649d955eaf8650d9ee0b27
