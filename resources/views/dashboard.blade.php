@extends('layouts.plantilla')

@section('contenido')
<br>
<div class="container-fluid containercardsdash">
    <br>
    <!-- Card Generar receta-->
    <div class="card" style="max-width: 18rem;" onclick="consultas();">
        <div class="card-header text-primary"><center><b>Receta</b></center></div>
        <div class="card-body">
        <a class="acards text-primary" data-bs-toggle="modal" data-bs-target="#recetaModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Receta Médica
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
    <!-- Card Referencia médica -->
    <div class="card" style="max-width: 18rem;" onclick="consultarexpedientes('nombrepacientereferencia');">
        <div class="card-header text-primary"><center><b>Referencia m&eacute;dica</b></center></div>
        <div class="card-body">
        <a class="acards" data-bs-toggle="modal" data-bs-target="#referenciaMedicaModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar referencia m&eacute;dica
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-file-medical-alt fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Generar historial clinico-->
    <div class="card" style="max-width: 18rem;" onclick="consultarexpedientes('expedienteid');">
        <div class="card-header text-primary"><center><b>Historial clinico</b></center></div>
        <div class="card-body">
        <a class="acards text-primary" data-bs-toggle="modal" data-bs-target="#historialClinicoModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Historial Clinico
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-file-medical-alt fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Card Expediente clinico-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center><b>Expediente clinico</b></center></div>
        <div class="card-body">
        <a class="acards text-primary" data-bs-toggle="modal" data-bs-target="#expedienteClinicoModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Expediente Clinico
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
    <!-- Card Generar Incapacidad-->
    <div class="card" style="max-width: 18rem;">
        <div class="card-header text-primary"><center><b>Incapacidad medica</b></center></div>
        <div class="card-body">
        <a class="acards text-primary" data-bs-toggle="modal" data-bs-target="#incapacidadClinicoModalCenter">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col my-auto">
                            Registrar Incapacidad Medica
                        </div>

                        <div class="col-md-auto my-auto">
                            <i class="fa-solid fa-file-medical-alt fa-4x"></i>
                        </div>
                    </div>
                </center>
            </div>   
        </a>
        </div>
    </div>
    <!-- Modal Signos-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Consulta Subsecuente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalsignos');">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalsignos">
        @csrf
        <label for="inputhistorial_id">Historial_id</label>
        <input id="inputhistorial_id" type="text" class="form-control" name="Historial_idSigno2" required>
        <br>
        <label for="inputpresionmax">Presion arterial maxima</label>
        <input id="inputpresionmax" type="text" class="form-control" pattern="^\d{3}$" name="PresionMaxSigno2" title="Ingrese la presion arterial maxima" required>
        <br>
        <label for="inputtemperatura">Temperatura</label>
        <input id="inputtemperatura" type="text" class="form-control" pattern="^\d{2}$" name="TemperaturaSigno2" title="Ingrese la temperatura" required>
        <br>
        <label for="inputpulso">Pulso</label>
        <input id="inputpulso" type="text" class="form-control" pattern="^\d{2,3}$" name="pulsoSigno2" title="Ingrese el pulso" required>
        <br>
        <label for="inputpeso">Peso</label>
        <input id="inputpeso" type="text" class="form-control" pattern="^\d{2,3}\.\d{1,2}$" name="PesoSigno2" title="Ingrese el peso (en libras)"required>
        <br>
        <label for="inputpresionmin">Presion arterial minima</label>
        <input id="inputpresionmin" type="text" class="form-control" pattern="^\d{2}$" name="PresionMinSigno2" title="Ingrese la presion arterial minima" required>
        <br>
        <label for="inputtalla">Talla</label>
        <input id="inputtalla" type="text" class="form-control" pattern="^\d{1,2}\.\d{1,2}$" name="TallaSigno2" title="Ingrese la talla" required>
        <br>
        <label for="inputaltura">Altura</label>
        <input id="inputaltura" type="text" class="form-control" pattern="^\d{1}\.\d{1,2}$" name="AlturaSigno2" title="Ingrese la altura (en metros)" required>
        <br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="removevalidateform('modalsignos');">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <!-- Modal Historial clinico-->
    <div class="modal fade" id="historialClinicoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Historial Clinico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalhistorialclinico');">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalhistorialclinico" class="needs-validation" novalidate>
        @csrf
        <label for="expedienteid">Seleccione un paciente, el formato de la lista es: Paciente -- Dui</label>
        <br>
        <select class="form-select" aria-label="Default select example" name="idexpediente" id="expedienteid" data-bs-toggle="tooltip" title="Seleccione un paciente, el formato de la lista es: Paciente -- Dui">

        </select>
        <!-- <input type="text" class="form-control" id="expedienteid" name="idexpediente" required> -->
        <br>
        <br>
        <label for="inputfechadeenfermedadactual">Fecha de enfermedad actual</label>
        <div class="input-group date">
            <input type="text" class="form-control" id="inputfechadeenfermedadactual" name="fechaenfermedadactual" data-bs-toggle="tooltip" title="Seleccione una fecha" autocomplete="off" required>
            <i class="fa-solid fa-calendar-days calendario"></i>
        </div>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputfechadediagnostico">Fecha de diagnostico</label>
        <div class="input-group date">
            <input type="text" class="form-control" id="inputfechadediagnostico" name="fechadiagnostico" data-bs-toggle="tooltip" title="Seleccione una fecha" autocomplete="off" required>
            <i class="fa-solid fa-calendar-days calendario"></i>
        </div>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputenfermedadactual">Enfermedad actual</label>
        <input id="inputenfermedadactual" type="text" class="form-control" name="enfermedadactual" data-bs-toggle="tooltip" title="Ingrese la enfermedad actual" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputexamenesprescritos">Examenes prescritos</label>
        <input id="inputexamenesprescritos" type="text" class="form-control" name="examenesprescritos" data-bs-toggle="tooltip" title="Ingrese los examenes prescritos" required>
        <div class="invalid-feedback">
            Este campo no puede estar vacio.
        </div>
        <br>
        <label for="inputdiagnostico">Diagnostico</label>
        <textarea class="form-control" id="inputdiagnostico" rows="3" name="diagnostico" data-bs-toggle="tooltip" title="Ingrese el diagnostico" required></textarea>
        <!-- <input id="inputdiagnostico" type="text" class="form-control" name="diagnostico" required> -->
        <div class="invalid-feedback">
            Este campo no puede estar vacio.
        </div>
        <br>
        <label for="inputrecetaexpedida">Receta expedida</label>
        <input id="inputdirecetaexpedida" type="text" class="form-control" name="receta" data-bs-toggle="tooltip" title="Ingrese la receta expedida" required>
        <div class="invalid-feedback">
            Este campo no puede estar vacio.
        </div>
        <br>
        <label for="inputobservaciones">Observaciones</label>
        <textarea class="form-control" id="inputobservaciones" rows="3" name="observaciones" data-bs-toggle="tooltip" title="Ingrese las observaciones" required></textarea>
        <!-- <input id="inputobservaciones" type="text" class="form-control" name="observaciones" required> -->
        <div class="invalid-feedback">
            Este campo no puede estar vacio.
        </div>
        <br>
        <label for="inputplanmedico">Plan medico a seguir</label>
        <input id="inputplanmedico" type="text" class="form-control" name="planmedico" data-bs-toggle="tooltip" title="Ingrese el plan medico a seguir" required>
        <div class="invalid-feedback">
            Este campo no puede estar vacio.
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="tooltip" title="Presione si desea registrar la consulta subsecuente">
            <label class="form-check-label" for="flexCheckDefault">Consulta subsecuente</label>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="removevalidateform('modalhistorialclinico');"><i class="fa-solid fa-xmark"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <!-- Modal Expediente clinico-->
    <div class="modal fade" id="expedienteClinicoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar Expediente Clinico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalexpedienteclinico');">
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" id="modalexpedienteclinico" class="needs-validation" novalidate>
        @csrf
        <label for="inputnombrepaciente">Nombre del paciente</label>
        <input type="text" class="form-control" id="inputnombrepaciente" name="nombreexpediente"  pattern="[a-zA-Z'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el nombre del paciente, solo se permiten letras" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputedad">Edad</label>
        <input type="text" class="form-control" id="inputedad" name="edad" pattern="^\d{1,3}$" data-bs-toggle="tooltip" title="Ingrese la edad del paciente, solo se permiten numeros entre 1 y 3 digitos" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputdomicilio">Domicilio</label>
        <input type="text" class="form-control" id="inputdomicilio" name="domicilio" data-bs-toggle="tooltip" title="Ingrese el docimicilio del paciente" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputresponsable">Responsable</label>
        <input id="inputresponsable" type="text" class="form-control" name="responsable" pattern="[a-zA-Z'-'\s]*" data-bs-toggle="tooltip" title="Ingrese el responsable del paciente, solo se permiten letras" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputduipaciente">Dui del paciente</label>
        <input id="inputduipaciente" type="text" class="form-control" name="duipaciente" placeholder="9 digitos sin guiones" pattern="[0-9]{9}" data-bs-toggle="tooltip" title="Ingrese el dui del paciente, solo se permiten numeros de 9 digitos" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputduiresponsable">Dui del responsable</label>
        <input id="inputduiresponsable" type="text" class="form-control" name="duiresponsable" placeholder="9 digitos sin guiones" pattern="[0-9]{9}" data-bs-toggle="tooltip" title="Ingrese el dui del responsable, solo se permiten numeros de 9 digitos" required>
        <div class="invalid-feedback">
            Por favor, revise el formato del texto ingresado.
        </div>
        <br>
        <label for="inputantecedentes">Antecedentes patologicos</label>
        <!-- <input id="inputantecedentes" type="text" class="form-control" name="antecedentes"> -->
        <textarea class="form-control" id="inputantecedentes" rows="3" name="antecedentes" data-bs-toggle="tooltip" title="Ingrese los antecedentes patologicos del paciente"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="removevalidateform('modalexpedienteclinico');"><i class="fa-solid fa-xmark"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!-- Modal Referencia médica -->
    <div class="modal fade" id="referenciaMedicaModalCenter" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Crear referencia m&eacute;dica</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalreferenciamedica');">
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="modalreferenciamedica" class="needs-validation" novalidate>
            @csrf
              <label for="inputfechadereferencia">Fecha</label>
              <div class="input-group date">
                <input type="text" class="form-control" id="inputfechadereferencia" name="fechadereferencia" value="<?php echo date('Y-m-d'); ?>" >
                <i class="fa-solid fa-calendar-days calendario"></i>
              </div>
        
              <label for="nombrepacientereferencia">
              Nombre del paciente
              </label>
              <select class="form-select" aria-label="Default select example" name="nombrepaciente"
                      id="nombrepacientereferencia" data-bs-toggle="tooltip" title="Seleccione un paciente, el formato de la lista es: Paciente -- Dui">
              </select>

              <label for="razon">Raz&oacute;n</label>
              <textarea id="razon" class="form-control" name="razon" title="Ingrese la razón de la referencia" required></textarea>
              <div class="invalid-feedback">
                Este campo no puede estar vacio.
              </div>
              <label for="se-le-envia-a">Se le env&iacute;a a</label>
              <textarea id="se-le-envia-a" class="form-control" name="lugar-referencia" title="Ingrese el nombre del lugar donde se envía al paciente" required></textarea>
              <div class="invalid-feedback">
                Este campo no puede estar vacio.
              </div>
            </div>

              <div class="modal-footer">
                <a href="{{route('editar_referencia')}}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar manualmente</a>
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

        <!-- Modal Incapacidad clinico-->
        <div class="modal fade" id="incapacidadClinicoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Incapacidad Medica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalincapacidadclinico');">
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" id="modalincapacidadclinico" class="needs-validation" novalidate>
            @csrf
            <label for="inputfechadeincapacidad">Fecha de enfermedad actual</label>
            <div class="input-group date">
                <input type="text" class="form-control" id="inputfechadeincapacidad" name="fechaincapacidad" autocomplete="off" required>
                <i class="fa-solid fa-calendar-days calendario"></i>
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            <label for="inputpaciente">Nombre del paciente</label>
            <input id="inputpaciente" type="text" class="form-control" name="paciente" required>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            <label for="inputdiagnosis">Diagnostico</label>
            <textarea class="form-control" id="inputdiagnosis" rows="3" name="diagnosis" required></textarea>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <!-- <input id="inputdiagnostico" type="text" class="form-control" name="diagnostico" required> -->
            <br>
            <label for="inputmedicacion">Tratamiento</label>
            <textarea class="form-control" id="inputmedicacion" rows="3" name="medicacion" required></textarea>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <!-- <input id="inputobservaciones" type="text" class="form-control" name="observaciones" required> -->
            <br>
            <label for="inputdiasincapacidad">Dias de incapacidad</label>
            <input type="number" class="form-control" id="inputdiasincapacidad"  name="diasincapacidad" min="0" max="120" pattern="[0-120]" placeholder="Solo números enteros" required>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            </div>
            <div class="modal-footer">
                <a href="/editor" type="submit" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar manualmente</a>
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
            </form>
            </div>
        </div>
        </div> 
</div>

<!-- Modal receta médica -->
<div class="modal fade" id="recetaModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Receta Medica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="removevalidateform('modalrecetaclinico');">
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" id="modalrecetaclinico" class="needs-validation" novalidate>
            @csrf
            <label for="expedienterecetaid">Seleccione el paciente al que se le prescribirá receta, el formato de la lista es: Paciente -- Dui</label>
            <select class="form-select" aria-label="Default select example" name="idexpediente" id="expedienterecetaid" data-bs-toggle="tooltip" title="Seleccione al paciente">
            </select>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            <br>
            <label for="inputespecialidadmedica">Especialidad</label>
            <br>
            <select class="form-control" id="inputespecialidadmedica" name="especialidadmedica" required>
                <option value="gastritis">Gastritis y Cáncer del Estomago</option>
                <option value="colitis">Colitis y cáncer de colon</option>
                <option value="estreñimiento">Estreñimiento y sangrado rectal</option>
                <option value="cancer">Cáncer recto y ano</option>
                <option value="hemorroides">Hemorroides</option>
                <option value="higado">Hígado y cálculos en vesícula</option>
                <option value="reflujo">Reflujo gastro-esofágico</option>
              </select>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            <label for="medicamentoid">Seleccione los medicamentos</label>
            <br>
            <select class="form-control" aria-label="Default select example" name="medicamentoid[]" id="medicamentoid" multiple="multiple" title="Seleccione los medicamentos"></select>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            <br>
            <label for="inputindicacionespaciente">Indicaciones</label>
            <textarea class="form-control" id="inputindicacionespaciente" rows="3" name="indicacionespaciente" required></textarea>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
            <br>
            </div>
            <div class="modal-footer">
                <a href="/editorreceta" type="submit" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar manualmente</a>
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </div>
            </form>
            </div>
        </div>
    </div>

<br>
<center>
    <h5>Agenda de citas del dia</h5>
</center>
<div class="row justify-content-center">
    <div class="col-auto">
        <div class="table-responsive container-fluid">
            <table class="table table-hover table-bordered w-auto">
                <thead class="tablehead">
                    <tr class="text-center">
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @if($citas->isEmpty())
                        <tr class="text-center">
                            <td colspan="3">Sin citas</td>
                        </tr>
                    @else
                    @foreach($citas as $cita)
                        <tr class="text-center">
                            <td>{{$cita->nombre}}</td>
                            <td>{{$cita->telefono}}</td>
                            <td>{{$cita->hora}}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div> 
</div>
<br>
<center>
    <h5>Estadisticas</h5>
</center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="card bg-c-blue counters-card">
                <div class="card-block">
                    <h6 class="m-b-20"><b>Enfermedad mas comun</b></h6>
                        <h3 class="h3"><i class="fa-solid fa-virus"></i><span class="float-end text-break"> {{ $enfermedadMasComunName }} <span class="badge bg-secondary">{{ $enfermedadMasComunCount }}</span></span></h3>
                    <p class="m-b-0">Enfermedades totales<span class="float-end"><span class="badge bg-secondary">{{ $historialesCount }}</span></span></p>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card bg-c-yellow counters-card">
                    <div class="card-block">
                        <h6 class="m-b-20"><b>Numero de personas con roles asignados</b></h6>
                        <h3 class="h3"><i class="fa-solid fa-user-doctor"></i><span class="float-end text-break">Administrador <span class="badge bg-secondary">{{ $countRoleAdmin }}</span></span></h3>
                        <h3 class="h3"><i class="fa-solid fa-book-open-reader"></i></i><span class="float-end text-break">Secretaria <span class="badge bg-secondary">{{ $countRoleSecretaria }}</span></span></h3>
                        <h3 class="h3"><i class="fa-solid fa-user-nurse"></i><span class="float-end text-break">Asistente <span class="badge bg-secondary">{{ $countRoleAsistente }}</span></span></h3>
                        <p class="m-b-0">Total de personas con rol<span class="float-end"><span class="badge bg-secondary">{{ $totalCountRoles }}</span></span></p>
                    </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card bg-c-green counters-card">
                <div class="card-block">
                    <h6 class="m-b-20"><b>Medicamento prescrito mas comun</b></h6>
                        <h3 class="h3"><i class="fa-solid fa-capsules"></i><span class="float-end text-break"> {{ $medicamentoPrescritoMasComunName }} <span class="badge bg-secondary">{{ $medicamentoPrescritoMasComunCount }}</span></span></h3>
                    <p class="m-b-0">Total de medicamentos prescritos<span class="float-end"><span class="badge bg-secondary">{{ $medicamentosPrescritosCount }}</span></span></p>
                </div>
            </div>
        </div>
    </div> <!--fin de fila 1 -->
    <center>
    <div class="row">
        <div class="col">
            <div class="card w-50 graficoscard">
                <div class="graficoscardblock">
                    <canvas id="grafico1"></canvas>
                </div>
            </div>
        </div>
    </div> <!--fin de fila 2 --> 
    </center>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/bootstrap-datepicker.es.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#expedienteid').select2({
        dropdownParent: $('#historialClinicoModalCenter'),
        width: '100%'
    });
    $('#nombrepacientereferencia').select2({
        dropdownParent: $('#referenciaMedicaModalCenter'),
        width: '100%'
    });
    $('#medicamentoid').select2({
        dropdownParent: $('#recetaModalCenter'),
        placeholder: 'Seleccione los medicamentos',
        allowClear: true,
        width: '100%'
    });
    $('#expedienterecetaid').select2({
        dropdownParent: $('#recetaModalCenter'),
        placeholder: 'Seleccione al paciente',
        width: '100%'
    });
    $(document).ready(function() {
            $('#inputfechadeexpedicion').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadeenfermedadactual').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadediagnostico').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadeincapacidad').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
            $('#inputfechadereferencia').datepicker({
                isRTL: false,
                format: 'yyyy-mm-dd',
                todayHighlight: true,
                language: 'es'
            });
    });
    //js para envio por ajax para la ventana de consulta subsecuente
    $(document).ready(function() {
        $("#modalsignos").submit(function(e) {
        e.preventDefault();
        var valinputhistorial_id = document.getElementById("inputhistorial_id").value;
        var valinputpresionmax = document.getElementById("inputpresionmax").value;
        var valinputtemperatura = document.getElementById("inputtemperatura").value;
        var valinputpulso = document.getElementById("inputpulso").value;
        var valinputpeso = document.getElementById("inputpeso").value;
        var valinputpresionmin = document.getElementById("inputpresionmin").value;
        var valinputtalla = document.getElementById("inputtalla").value;
        var valinputaltura = document.getElementById("inputaltura").value;
        var valIMC = valinputpeso / (valinputaltura * valinputaltura);

        Swal.fire({
            icon: 'info',
            title: 'Confirmar.',
            text: '¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('signos')}}",
                    type:"POST",
                    data:{
                        'Historialid': valinputhistorial_id,
                        'PresionMax': valinputpresionmax,
                        'Temperatura': valinputtemperatura,
                        'Pulso': valinputpulso,
                        'Peso': valinputpeso,
                        'PresionMin': valinputpresionmin,
                        'Talla': valinputtalla,
                        'Altura': valinputaltura,
                        'IMC': valIMC,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        document.getElementById("inputhistorial_id").value="";
                        document.getElementById("inputpresionmax").value="";
                        document.getElementById("inputtemperatura").value="";
                        document.getElementById("inputpulso").value="";
                        document.getElementById("inputpeso").value="";
                        document.getElementById("inputpresionmin").value="";
                        document.getElementById("inputtalla").value="";
                        document.getElementById("inputaltura").value="";
                        if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente la consulta subsecuente',
                                    confirmButtonText: 'Ok',
                                    })    
                            }
                            if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar la consulta subsecuente',
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('No se registro la consulta subsecuente', '', 'info')
            }
            })
        });
    });
//js para envio por ajax para la ventana de receta clinica
$(document).ready(function() {
        $("#modalrecetaclinico").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalrecetaclinico");
        var valinputnombredelpaciente = document.getElementById("expedienterecetaid").value;
        var valinputespecialidadmedica = document.getElementById("inputespecialidadmedica").value;
        var valinputindicacionespaciente = document.getElementById("inputindicacionespaciente").value;
        var valinputmedicamentos=$('#medicamentoid').val();
        //console.log('antes de ir al controlador');
        //console.log(valinputmedicamentos);
        //var valinputmedicamento = document.getElementByNa("idmedicamento").value;
        //console.log(selectexpedienteidvalue);
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
                    url:"{{route('receta')}}",
                    type:"POST",
                    data:{
                        'nombredelpaciente': valinputnombredelpaciente,
                        'especialidadmedica': valinputespecialidadmedica,
                        'indicacionespaciente': valinputindicacionespaciente,
                        'medicamentoid': valinputmedicamentos,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        //document.getElementById("inputnombre").value="";
                        element.classList.remove("was-validated");
                        console.log(test);
                            if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente la receta del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                                $("#modalrecetaclinico")[0].reset(); //Limpiar formulario
                            }
                            if(test.estado === 'error'){
                                console.log('entro a este if');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar la receta del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro la receta del paciente', '', 'info')
            }
            })
        }
        });
    });
    //js para envio por ajax para la ventana de historial
    $(document).ready(function() {
        $("#modalhistorialclinico").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalhistorialclinico");
        var selectexpedienteid = document.getElementById('expedienteid');
        var selectexpedienteidvalue = selectexpedienteid.options[selectexpedienteid.selectedIndex].value;
        var selectexpedienteidtext = selectexpedienteid.options[selectexpedienteid.selectedIndex].text;
        var valinputfechaenfermedadactual = document.getElementById("inputfechadeenfermedadactual").value;
        var valinputfechadiagnostico = document.getElementById("inputfechadediagnostico").value;
        var valinputenfermedadactual = document.getElementById("inputenfermedadactual").value;
        var valinputexamenesprescritos = document.getElementById("inputexamenesprescritos").value;
        var valinputdiagnostico = document.getElementById("inputdiagnostico").value;
        var valinputrecetaexpedida = document.getElementById("inputdirecetaexpedida").value;
        var valinputobservaciones = document.getElementById("inputobservaciones").value;
        var valinputplanmedico = document.getElementById("inputplanmedico").value;
        //console.log(selectexpedienteidvalue);
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
                    url:"{{route('historial')}}",
                    type:"POST",
                    data:{
                        'IdExpediente': selectexpedienteidvalue,
                        'FechaEnfermedadActual': valinputfechaenfermedadactual,
                        'FechaDiagnostico': valinputfechadiagnostico,
                        'EnfermedadActual': valinputenfermedadactual,
                        'ExamenesPrescritos': valinputexamenesprescritos,
                        'Diagnostico': valinputdiagnostico,
                        'RecetaExpedida': valinputrecetaexpedida,
                        'Observaciones': valinputobservaciones,
                        'PlanMedico': valinputplanmedico,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("inputfechadeenfermedadactual").value="";
                        document.getElementById("inputfechadediagnostico").value="";
                        document.getElementById("inputenfermedadactual").value="";
                        document.getElementById("inputexamenesprescritos").value="";
                        document.getElementById("inputdiagnostico").value="";
                        document.getElementById("inputdirecetaexpedida").value="";
                        document.getElementById("inputobservaciones").value="";
                        document.getElementById("inputplanmedico").value="";
                            if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente el hisotial del paciente: '+selectexpedienteidtext,
                                    confirmButtonText: 'Ok',
                                    }).then((resultado) => {
                                        if(resultado.isConfirmed)
                                        {
                                            abrirformulario(); 
                                        }
                                    }
                                    )
                                    consultarhistorial(selectexpedienteidvalue, valinputfechaenfermedadactual, valinputenfermedadactual);
                            }
                            if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar el hisotial del paciente: '+selectexpedienteidtext,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro del hisotial', '', 'info')
            }
            })
        }
        });
    });

    //js para envio por ajax para la ventana de expediente
    $(document).ready(function() {
        $("#modalexpedienteclinico").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalexpedienteclinico");
        var valinputnombrepaciente = document.getElementById("inputnombrepaciente").value;
        var valinputedad = document.getElementById("inputedad").value;
        var valinputdomicilio = document.getElementById("inputdomicilio").value;
        var valinputresponsable = document.getElementById("inputresponsable").value;
        var valinputduipaciente = document.getElementById("inputduipaciente").value;
        var valinputduiresponsable = document.getElementById("inputduiresponsable").value;
        var valinputantecedentes = document.getElementById("inputantecedentes").value;
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
                    url:"{{route('expediente')}}",
                    type:"POST",
                    data:{
                        'NombrePaciente': valinputnombrepaciente,
                        'Edad': valinputedad,
                        'Domicilio': valinputdomicilio,
                        'Responsable': valinputresponsable,
                        'DuiResponsable': valinputduiresponsable,
                        'DuiPaciente': valinputduipaciente,
                        'Antecedentes': valinputantecedentes,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                        document.getElementById("inputnombrepaciente").value="";
                        document.getElementById("inputedad").value="";
                        document.getElementById("inputdomicilio").value="";
                        document.getElementById("inputresponsable").value="";
                        document.getElementById("inputduipaciente").value="";
                        document.getElementById("inputduiresponsable").value="";
                        document.getElementById("inputantecedentes").value="";
                        if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente el expediente de ' +test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                })
                            }
                        if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar el expediente de ' +test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro del expediente', '', 'info')
            }
            })
        }
        });
    });
    
	//js para envio por ajax para la ventana de referencia
	$(document).ready(function() {
	    $("#modalreferenciamedica").submit(function(e) {
            e.preventDefault();
            var element = document.getElementById("modalreferenciamedica");
            //const fecha = document.getElementById("inputfechadereferencia").value;
            const pacientereferencia = document.getElementById("nombrepacientereferencia");
            const nombre = pacientereferencia.options[pacientereferencia.selectedIndex].text.slice(0, -11);
            const referenciaRazon = document.getElementById("razon").value;
            const seLeEnviaA = document.getElementById("se-le-envia-a").value;
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
                        url:"{{route('crear_referencia')}}",
                        type:"POST",
                        data:{
                            //'fecha': fecha,
                            'nombre': nombre,
                            'razon': referenciaRazon,
                            'se_le_envia_a': seLeEnviaA,
                            "_token": $("meta[name='csrf-token']").attr("content")
                        },
                        //dataType:"json",
                        success: function(test) {
                            //document.getElementById("inputnombre").value="";
                            element.classList.remove("was-validated");
                            if(test.estado === 'guardado'){
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Hecho!.',
                                        text: 'Se registro correctamente la referencia del paciente ' +test.nombrePaciente,
                                        confirmButtonText: 'Ok',
                                    })
                                    $("#modalreferenciamedica")[0].reset(); //Limpiar formulario
                                }
                            if(test.estado === 'error'){
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Ocurrio un error!.',
                                        text: 'No se pudo registrar el la referencia del paciente' +test.nombrePaciente,
                                        confirmButtonText: 'Ok',
                                    })
                            }
                        },
                    });
                } else if (result.isDismissed) {
                   Swal.fire('Se cancelo el registro de la referencia', '', 'info')
                }
            })
        } 
	    });
	});

function consultarexpedientes(comboBox){
    var comboExpedientes = document.getElementById(comboBox);
    $.ajax({
                    url:"{{route('expedienteconsultarajax')}}",
                    type:"GET",
                    data:{
                    },
                    //dataType:"json",
                    success: function(test){
                        //console.log(test);
                        //console.log("legth "+test.expedientes.length);
                        for (var j = test.expedientes.length; j >= 0; j--) {
                            comboExpedientes.remove(j);
                        }
                        for (var i = 0; i < test.expedientes.length; i++) {
                            const option = document.createElement('option');
                            const valornombre = test.expedientes[i].nombre;
                            const valordui = test.expedientes[i]["dui paciente"];
                            option.value = test.expedientes[i].id;
                            option.text = valornombre + "--" + valordui;
                            comboExpedientes.appendChild(option);
                        }
                    }
    });
}
function consultarexpedientes_receta(){
    var comboExpedientes = document.getElementById("expedienterecetaid");
    $.ajax({
                    url:"{{route('exprecetaconsultarajax')}}",
                    type:"GET",
                    data:{
                    },
                    //dataType:"json",
                    success: function(test){
                        //console.log(test);
                        //console.log("legth "+test.expedientes.length);
                        for (var j = test.expedientes.length; j >= 0; j--) {
                            comboExpedientes.remove(j);
                        }
                        for (var i = 0; i < test.expedientes.length; i++) {
                            const option = document.createElement('option');
                            const valornombre = test.expedientes[i].nombre;
                            const valordui = test.expedientes[i]["dui paciente"];
                            option.value = test.expedientes[i].nombre;
                            option.text = valornombre + "--" + valordui;
                            comboExpedientes.appendChild(option);
                        }
                    }
    });
}
function consultarmedicamentos(){
    var comboMedicamentos = document.getElementById("medicamentoid");
    $.ajax({
                    url:"{{route('medicamentoconsultarajax')}}",
                    type:"GET",
                    data:{
                    },
                    //dataType:"json",
                    success: function(test){
                        //console.log(test);
                        //console.log("legth "+test.medicamentos.length);
                        for (var j = test.medicamentos.length; j >= 0; j--) {
                            comboMedicamentos.remove(j);
                        }
                        for (var i = 0; i < test.medicamentos.length; i++) {
                            const option = document.createElement('option');
                            const valornombre = test.medicamentos[i].nombre;
                            option.value = test.medicamentos[i].id;
                            option.text = valornombre;
                            comboMedicamentos.appendChild(option);
                        }
                    }
    });
}
function consultas() {
    consultarexpedientes_receta();
    consultarmedicamentos();
    
}



function consultarhistorial(expediente, fecha, enfermedad){
        $.ajax({
                        url:"{{route('historialconsultarajax')}}",
                        type:"POST",
                        data:{
                            'expedienteId': expediente,
                            'fecha': fecha,  
                            'enfermedad': enfermedad, 
                            "_token": $("meta[name='csrf-token']").attr("content")                     
                        },
                        //dataType:"json",
                        success: function(test){
                            document.getElementById("inputhistorial_id").value = test.historialid[0].id;              
                        }
        });
        
    }

    function abrirformulario(){

        if(document.getElementById('flexCheckDefault').checked)
        {
            $("#historialClinicoModalCenter").modal("hide");
            $("#exampleModalCenter").modal("show");
        }


    }


    //js para envio por ajax para la ventana de incapacidad
    $(document).ready(function() {
        $("#modalincapacidadclinico").submit(function(e) {
        e.preventDefault();
        var element = document.getElementById("modalincapacidadclinico");
        var valinputfechadeincapacidad = document.getElementById("inputfechadeincapacidad").value;
        var valinputpaciente = document.getElementById("inputpaciente").value;
        var valinputdiagnosis = document.getElementById("inputdiagnosis").value;
        var valinputmedicacion = document.getElementById("inputmedicacion").value;
        var valinputdiasincapacidad = document.getElementById("inputdiasincapacidad").value;
        //console.log(selectexpedienteidvalue);
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
                    url:"{{route('incapacidad')}}",
                    type:"POST",
                    data:{
                        'FechaIncapacidad': valinputfechadeincapacidad,
                        'NombredePaciente': valinputpaciente,
                        'Diagnosis': valinputdiagnosis,
                        'Medicacion': valinputmedicacion,
                        'DiasIncapacidad': valinputdiasincapacidad,
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    //dataType:"json",
                    success: function(test){
                        element.classList.remove("was-validated");
                            if(test.estado === 'guardado'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho!.',
                                    text: 'Se registro correctamente la incapacidad del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                                $("#modalincapacidadclinico")[0].reset(); //Limpiar formulario
                            }
                            if(test.estado === 'error'){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ocurrio un error!.',
                                    text: 'No se pudo registrar la incapacidad del paciente: '+test.nombrePaciente,
                                    confirmButtonText: 'Ok',
                                    })
                            }
                        }
                    });
            } else if (result.isDismissed) {
                Swal.fire('Se cancelo el registro de la incapacidad del paciente', '', 'info')
            }
            })
        }
        });
    });
</script>
<script>
var data1Grafico1 = new Array();
var data2Grafico1 = new Array();
@foreach($grafico1Data1 as $data1)
    data1Grafico1.push({{ $data1 }});
@endforeach
@foreach($grafico1Data2 as $data2)
    data2Grafico1.push({{ $data2 }});
@endforeach
var ctx = document.getElementById('grafico1').getContext('2d');
      var myChart1 = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Reserva de citas'],
              datasets: [{
                  label: 'Horas pendientes a asignar',
                  data: data1Grafico1,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                  ],
                  borderWidth: 1
              },
              {
                  label: 'Horas asignadas',
                  data: data2Grafico1,
                  backgroundColor: [
                      'rgba(54, 162, 235, 0.2)',
                  ],
                  borderColor: [
                      'rgba(54, 162, 235, 1)',
                  ],
                  borderWidth: 1
              }
            ]
          },
          options: {
                responsive: true,
                maintainAspectRatio: false,
                animation:{
                  duration: 2000,
                },
                plugins: {
                    title: {
                        display: true,
                        position: 'bottom',
                        text: 'Horas de reserva de citas a partir de {{ $dateNow }}'                        
                    }
                },
          }
});
$(window).on('resize load', function() {
  if ($(window).width() <= 498) { 
    $(".graficoscard").removeClass("w-50");
  }
  else {
    $(".graficoscard").addClass("w-50");
  }
});
</script>
@endsection
