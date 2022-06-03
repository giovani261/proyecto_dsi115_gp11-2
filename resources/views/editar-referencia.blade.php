@extends('layouts.plantilla')
@section('contenido')
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>Editar Referencia Medica</title>
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
    </div> 
    <div style="margin: 0; padding:0;" class="section_title text-center mb-55">
        <h3 style="font-size: 25px;">MEDICINA Y CIRUGÍA GASTROINTESTINAL - J.V.P.M. 1668 </h3>
        <p><strong>DR. RENE RODRÍGUEZ ROMERO.</strong></p>
    </div>
    <br> 
    <div class="titulo">
        <h6 style="text-align: center; font-size: 18px; padding-top:15px;" class="text-white">EDITAR REFERENCIA MEDICA</h6>
    </div>  
<textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>
	<br>
	<br>
  <p>
    <img alt="logo" class="img-thumbnail logo" src="{{ asset('imgs/logo.jpeg') }}" width="100" height="100" style="margin: auto; display: block" />
  </p>
<h1 style="text-align: center;"><span style="font-size:20px"><strong>Unidad m&eacute;dica humana</strong></span><br />
<span style="font-size:22px"><strong>Referencia m&eacute;dica</strong></span></h1>
<table align="left" border="0" cellpadding="1" cellspacing="1" style="height:148px; width:619px">
	<tbody>
		<tr>
			<td colspan="2">Paciente:</td>
			<td colspan="3"><u>[Nombre del paciente]</u></td>
		</tr>
		<tr>
			<td colspan="2">Raz&oacute;n o diagn&oacute;stico:</td>
			<td colspan="3"><u>[Enfermedad por la cual se le refiere a otro lugar al paciente]</u></td>
		</tr>
		<tr>
			<td colspan="2">Se refiere a:</td>
			<td colspan="3"><u>[Lugar al que se refiere al paciente]</u></td>
		</tr>
		<tr>
			<td colspan="2" style="white-space:nowrap">Firma del m&eacute;dico que refiere:</td>
			<td><u>[Firma]</u></td>
			<td>Fecha:</td>
			<td><u><?php echo date('d-m-Y'); ?></u></td>
		</tr>
	</tbody>
</table>
</textarea>

<!--come back button-->
<br>
<div class="form-group text-center">
  <a href="{{ route('dashboard') }}" type="submit" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
</div>
    
    
    <!--
    <h1>Crear referencia medica</h1>
    <p>Edite el cuerpo del documento.</p>
    <main>
      <div class="centered">
        <div class="row">
	      <div class="document-editor__toolbar"></div>
	    </div>
	    <div class="row row-editor">
	      <div class="editor-container">
            <div class="editor">
              <h2>Hola<h2>
              <p> Jajajaja</p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="{{ asset('js/ckeditor/build/ckeditor.js') }}"></script>
    <script>
    DecoupledDocumentEditor.create( document.querySelector( '.editor' ))
	.then( editor => {
	    window.editor = editor;
	    // Set a custom container for the toolbar.
		document.querySelector( '.document-editor__toolbar' ).appendChild( editor.ui.view.toolbar.element );
		document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
	} )
	.catch( error => {
		console.error( error );
	} );
    </script>
    -->
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor1', {
      height: 400,
      baseFloatZIndex: 10005,
      removeButtons: 'PasteFromWord'
  });
</script>
</body>
</html>
@endsection