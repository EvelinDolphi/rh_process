@extends('layouts.master')

@section('Titulo', 'Datos Personales')

@section('contenido')

  <h4 style="color:orange;">Datos Personales</h4>

<button type="button" name="button" onclick="llenar();">Llenar datos</button>
  <br>
  <form  method="post" action="{{ route('datospersonales') }}" class="needs-validation" novalidate>
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Numero Empleado</label>
        <input name="EmployeeNumber" type="text" class="form-control" id="EmployeeNumber" placeholder="Nombre" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input name="EmployeeName" type="text" class="form-control" id="EmployeeName" placeholder="Nombre" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Apellido Paterno</label>
        <input name="EmployeeSurnameF" type="text" class="form-control" id="EmployeeSurnameF" placeholder="Apellido Paterno" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Apellido Materno</label>
        <input name="EmployeeSurnameS" type="text" class="form-control" id="EmployeeSurnameS" placeholder="Apellido Materno" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Numero de Seguro</label>
        <input name="SocialNumber" type="text" class="form-control" id="SocialNumber" placeholder="Numero_Seguro" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Curp</label>
        <input name="Curp" type="text" class="form-control" id="Curp" placeholder="Curp" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">RFC</label>
        <input name="RFC" type="text" class="form-control" id="RFC" placeholder="RFC" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <div class="col-md-6 mb-3">
        <label for="validationCustomUsername">Fecha de Alta</label>
        <br>
        <input type="date" name="Date" id="Date" step="1" min="1940-01-01" max="2001-12-31" id="Date" value="">
        <div class="valid-feedback">
        Bien echo!
        <br>
          <div class="invalid-feedback">
            Elige una fecha de alta.
          </div>
        </div>
        <br>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Antiguedad</label>
        <br>
        <input type="date" name="Antiguedad" id="Antiguedad" step="1" min="1940-01-01" max="2001-12-31" value="">
        {{-- <input type="text" class="form-control" id="validationCustom03" placeholder="Antiguedad" required> --}}
        <div class="valid-feedback">
        Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Fecha de cumpleaños:</label>
        <br>
        <input type="date" name="Birthdate" id="Birthdate" step="1" min="1940-01-01" max="2001-12-31" value="">
        {{-- <input type="text" class="form-control" id="validationCustom03" placeholder="Fecha" required> --}}
        <div class="invalid-feedback">
          Elige una fecha de cumpleaños.
        </div>
      </div>
      <p>Sexo:
        <br>
        <input name="Sexo" type="radio" value="h"> Hombre
        <input name="Sexo" type="radio" value="m"> Mujer
        <div class="invalid-feedback">
          Elige un genero.
        </div>
      </p>
      <p>Estado Civil:
        <br>
        <br>
        <input name="Civil" type="radio" value="soltero"> Soltero
        <input name="Civil" type="radio" value="casado"> Casado
        <input name="Civil" type="radio" value="divorciado"> Divorciado
        <input name="Civil" type="radio" value="viudo"> Viudo
        <input name="Civil" type="radio" value="separado"> Separado
        <div class="invalid-feedback">
          Elige un genero.
        </div>
      </p>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Numero de hijos:</label>
        <input name="NHijos" type="text" class="form-control" id="NHijos" placeholder="Numero_Hijos" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
    </div>

    <br>
    <br>
    <h4 style="color:orange;">Dirección</h4>
    <div class="form-row">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Avenida</label>
          <input name="ContactAvenue"type="text" class="form-control" id="ContactAvenue" placeholder="Avenida" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Lote</label>
          <input name="ContactLote" type="text" class="form-control" id="ContactLote" placeholder="Lote" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Manzana</label>
          <input name="ContactManzana" type="text" class="form-control" id="ContactManzana" placeholder="Manzana" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Numero</label>
          <input name="ContactNumber" type="text" class="form-control" id="ContactNumber" placeholder="Numero" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Calle</label>
          <input name="ContactStreet" type="text" class="form-control" id="ContactStreet" placeholder="Calle" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Colonia</label>
          <input name="ContactColonia" type="text" class="form-control" id="ContactColonia" placeholder="Colonia" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Municipio</label>
          <input name="ContactMunicipality" type="text" class="form-control" id="ContactMunicipality" placeholder="Municipio" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Estado</label>
          <input name="ContactState" type="text" class="form-control" id="ContactState" placeholder="Estado" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Codigo Postal</label>
          <input name="ContactCodigoP" type="text" class="form-control" id="ContactCodigoP" placeholder="Codigo Postal" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
      </div>
    </div>
    <h4 style="color:orange;">Contacto de Emergencia</h4>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input name="EmergencyName" type="text" class="form-control" id="EmergencyName" placeholder="Nombre" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Telefono</label>
        <input name="EmergencyPhone"type="text" class="form-control" id="EmergencyPhone" placeholder="Telefono" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Avenida</label>
          <input name="AvenueContact"type="text" class="form-control" id="AvenueContact" placeholder="Avenida" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Lote</label>
          <input name="LoteContact" type="text" class="form-control" id="LoteContact" placeholder="Lote" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Manzana</label>
          <input name="ManzanaContact" type="text" class="form-control" id="ManzanaContact" placeholder="Manzana" value="" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Numero</label>
          <input name="NumberContact" type="text" class="form-control" id="NumberContact" placeholder="Numero" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Calle</label>
          <input name="StreetContact" type="text" class="form-control" id="StreetContact" placeholder="Calle" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Colonia</label>
          <input name="ColoniaContact" type="text" class="form-control" id="ColoniaContact" placeholder="Colonia" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Municipio</label>
          <input name="MunicipalityContact" type="text" class="form-control" id="MunicipalityContact" placeholder="Municipio" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Estado</label>
          <input name="StateContact" type="text" class="form-control" id="StateContact" placeholder="Estado" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom05">Codigo Postal</label>
          <input name="CodigoPContact" type="text" class="form-control" id="CodigoPContact" placeholder="Codigo Postal" required>
          <div class="valid-feedback">
            Bien echo!
          </div>
        </div>
      </div>
    </div>

    <br>
    <button class="btn btn-primary" type="submit">Siguiente</button>
    <br>
    <br>
    <br>
    <br>
  </form>

  <script type="text/javascript">
function llenar() {
  $("#EmployeeNumber").val('701');
  $("#EmployeeName").val('Jose');
  $("#EmployeeSurnameF").val('Hernandez');
  $("#EmployeeSurnameS").val('Ortiz');
  $("#SocialNumber").val('122890');
  $("#Curp").val('1228902SSA');
  $("#RFC").val('1228902S');
  $("#Date").val('31/03/2019');
  $("#Antiguedad").val('31/03/2019');
  $("#Birthdate").val('31/03/2019');
  $("#NHijos").val('2');
  $("#ContactAvenue").val('Rancho Viejo');
  $("#ContactLote").val('18');
  $("#ContactManzana").val('3');
  $("#ContactNumber").val('77');
  $("#ContactStreet").val('Ixmiquilpan');
  $("#ContactColonia").val('Los Tulipanes');
  $("#ContactMunicipality").val('Tizayuca');
  $("#ContactState").val('Hidalgo');
  $("#ContactCodigoP").val('55789');
  $("#EmergencyName").val('Marianel Castro');
  $("#EmergencyPhone").val('557898092');
  $("#AvenueContact").val('Guerrero');
  $("#LoteContact").val('4');
  $("#ManzanaContact").val('2');
  $("#NumberContact").val('34');
  $("#StreetContact").val('Revolucion');
  $("#ColoniaContact").val('Marina');
  $("#MunicipalityContact").val('Tecamac');
  $("#StateContact").val('Mex');
  $("#CodigoPContact").val('77895');
}
</script>

  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
  @endsection
