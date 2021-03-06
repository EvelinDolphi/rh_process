@extends('layouts.master')

@section('Titulo', 'Ingresar-Empleado')

@section('contenido')

  <h4 style="color:orange;">DIRECCIÓN</h4>
  <br>
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Avenida</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Avenida" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Lote</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Lote" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Manzana</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Manzana" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Numero</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Numero" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Calle</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Calle" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Colonia</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Colonia" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Municipio</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Municipio" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Estado</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Estado" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom05">Codigo Postal</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Codigo Postal" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Siguiente</button>
  </form>

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
