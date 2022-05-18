<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>El título de mi página</title>
    <link 
        href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" 
        rel="stylesheet"
        type="text/css">
    <!--<link 
        rel="stylesheet"
        href="style.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> -->
  </head>
  <body data-editor="DecoupledDocumentEditor" data-collaboration="false" data-revision-history="false">
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas del sitio web -->
    <h1>Crear referencia medica</h1>
    <p>Edite el cuerpo del documento.</p>
    <!-- Aquí está el contenido principal de nuestra página -->
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
    <footer>
      <p>©Copyright 2050 de nadie. Todos los derechos revertidos.</p>
    </footer>
    
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
  </body>
</html>

