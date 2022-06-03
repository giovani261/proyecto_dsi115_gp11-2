@extends('layouts.plantilla')
@section('contenido')
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>Editar Receta Medica</title>
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
        <h6 style="text-align: center; font-size: 18px; padding-top:15px;" class="text-white">EDITAR RECETA MEDICA</h6>
    </div> 
  <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>
      <br>
      <br>
      <br>
      <h1 style="text-align: center;"><span style="font-size:20px"><strong>Unidad m&eacute;dica humana</strong></span><br />
        <span style="font-size:22px"><strong>Referencia m&eacute;dica</strong></span></h1>

    <table align="left" border="0" cellpadding="1" cellspacing="1" style="height:148px; width:619px">
        <tbody>
            <tr>
                <td colspan="2">Fecha&#58;</td>
                <td colspan="3"><u><?php echo date('d-m-Y'); ?></u></td>
            </tr>
            <tr>
                <td colspan="2">Hora&#58;</td>
                <td colspan="3"><u>[Hora de expedici&#243;n]</u></td>
            </tr>
            <tr>
                <td colspan="2">Nombre&#58;</td>
                <td colspan="3"><u>[Nombre del paciente]</u></td>
            </tr>
            <tr>
                <td colspan="2">Prescripci&#243;n&#58;</td>
                <td colspan="3"><u>[Prescripciones m&#233;dicas]</u></td>
            </tr>
            <tr>
                <td colspan="2">Pr&#243;xima cita&#58;</td>
                <td colspan="3"><u>[Fecha de pr&#243;xima cita]</u></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="3"><u></u></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="3"><u></u></td>
            </tr>
            <tr>
                <td colspan="2" style="white-space:nowrap">Firma del m&eacute;dico que refiere:</td>
                <td colspan="3"><u>&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;&#95;</u></td>
            </tr>
        </tbody>
    </table>
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