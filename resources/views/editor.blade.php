@extends('layouts.plantilla')
@section('contenido')
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>Editar Incapacidad</title>
  <script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <br>
    <div style="margin: 0; padding:0;" class="col">   
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
            .titulo{
            background-color: #6a2730;
            height: 50px;
        }
        </style> 
        <h4>Asociaciones</h4>
       <!-- <a href="http://asccelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc1.jpeg') }}" alt="asociacion 1" class="img-thumbnail asc1"></a>
        <a href="https://www.acedes.net/" target="_blank"><img src="{{ asset('imgs/asc2.jpeg') }}" alt="asociacion 2" class="img-thumbnail asc2"></a>
        <a href="https://www.ascgelsalvador.com/" target="_blank"><img src="{{ asset('imgs/asc3.jpeg') }}" alt="asociacion 3" class="img-thumbnail asc3"></a>-->

    </div> 
    <div style="margin: 0; padding:0;" class="section_title text-center mb-55">
        <h3 style="font-size: 25px;">MEDICINA Y CIRUGÍA GASTROINTESTINAL - J.V.P.M. 1668 </h3>
        <p><strong>DR. RENE RODRÍGUEZ ROMERO.</strong></p>
    </div>
    <br> 
    <div class="titulo">
        <h6 style="text-align: center; font-size: 18px; padding-top:15px;" class="text-white">EDITAR INCAPACIDAD</h6>
    </div> 
  <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>
        <br>
        <br>
      A QUIEN CORRESPONDA&#58;
      EL INFRASCRITO&#44; MEDICO Y CIRUJANO&#44; POR ESTE MEDIO
      CERTIFICA QUE LA PACIENTE &#91;NOMBRE DEL/LA PACIENTE&#93;&#44; HA 
      CONSULTADO CON MI PERSONA EL DIA &#91;FECHA&#93;&#44; DEL 
      EN CURSO&#44; Y DESPUES DE VERIFICARLE EXAMEN FISICO&#44; SE LE HA DIAGNOSTICADO&#44;
        <br>
        <br>
      &#91;DIAGNOSTICO&#93;
        <br>
        <br>
      POR LO QUE SE LE INSTITUYE TRATAMIENTO MEDICO&#44; PARA 
      CADA UNA DE SUS PATOLOGIAS&#44; Y SE LE DEJA UNA CITA MEDICA &#91;FECHA/TIEMPO&#93;
        <br>
        <br>
      Y PARA LOS USOS QUE LA/EL INTERESADA CREA CONVENIENTE&#44;
      SE EXTIENDE LA PRESENTE &#91;FECHA&#93;&#46;

  </textarea>
  <script>
    CKEDITOR.replace('editor1', {
      height: 400,
      baseFloatZIndex: 10005,
      removeButtons: 'PasteFromWord'
    });
  </script>

  <!--come back button-->
  <br>
  <div class="form-group text-center">
    <a href="/dashboard" type="submit" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
</div>
</body>
</html>
@endsection