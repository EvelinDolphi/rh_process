@extends('layouts.master')

@section('Titulo', 'Datos')

@section('contenido')

  <h4 style="color:orange;">DATOS EMPRESA</h4>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <br>
  <button type="button" name="button" onclick="llenar();">Llenar datos</button>
    <br>
  <form  method="post" action="{{ route('datosempresa', ['employeeId' => $employee->id]) }}" class="needs-validation" novalidate>
    @csrf
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Jefe Inmediato</label>
        <input name="JefeIm" type="text" class="form-control" id="JefeIm" placeholder="Jefe Inmediato" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Departamento</label>
        <input name="Departa" type="text" class="form-control" id="Departa" placeholder="Departamento" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Área</label>
        <input name="Area" type="text" class="form-control" id="Area" placeholder="Area" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Delegación</label>
        <input name="Delega" type="text" class="form-control" id="Delega" placeholder="Delegacion" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripción" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Salario Base</label>
        <input name="SalarioB" type="text" class="form-control" id="SalarioB" placeholder="$" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Salario Contratación</label>
        <input name="SalarioC" type="text" class="form-control" id="SalarioC" placeholder="$" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Salario Cotización</label>
        <input name="SalarioCo" type="text" class="form-control" id="SalarioCo" placeholder="$" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-12 mb-3">
      <p>Status:
        <br>
        <br>
        <input name="Status" type="radio" value="a"> Alta
        <input name="Status" type="radio" value="b"> Baja
        <input name="Status" type="radio" value="v"> Voluntaria
        <input name="Status" type="radio" value="r"> Resición
        <div class="invalid-feedback">
          Elige un status.
        </div>
        </div>
      </p>
    </div>
    <h4 style="color:orange;">DATOS DE BANCO</h4>
    <br>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Numero de Cuenta</label>
      <input name="NumeroC" type="text" class="form-control" id="NumeroC" placeholder="Numero de cuenta" required>
      <div class="valid-feedback">
        Bien echo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Clabe Interbancaria</label>
      <input name="ClabeIn" type="text" class="form-control" id="ClabeIn" placeholder="Clabe Interbancaria" required>
      <div class="valid-feedback">
        Bien echo!
      </div>
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Guardar</button>
  </form>
  <br>
  <br>

  <script type="text/javascript">
function llenar() {
  $("#JefeIm").val('Francisco Beltran');
  $("#Departa").val('Sistemas');
  $("#Area").val('Diseño');
  $("#Delega").val('Tizayuca');
  $("#descripcion").val('Encargado');
  $("#SalarioB").val('2700');
  $("#SalarioC").val('2700');
  $("#SalarioCo").val('3000');
  $("#NumeroC").val('10253399444');
  $("#ClabeIn").val('1000010253399444');
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
