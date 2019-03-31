@extends('layouts.master')

@section('Titulo', 'Vigencias')

@section('contenido')
  <h4 style="color:orange;">Ingresa una Vigencia</h4>
  <br>
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nombre</label>
        <input name="Name" type="text" class="form-control" id="validationCustom01" placeholder="Nombre" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>
      <br>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">RFC</label>
        <input name="RFC" type="text" class="form-control" id="validationCustom02" placeholder="RFC" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Numero de seguro social</label>
        <input name="NumeroSocial" type="text" class="form-control" id="validationCustom02" placeholder="Numero seguro social" value="" required>
        <div class="valid-feedback">
          Bien echo!
        </div>
      </div>
      <br>

      <br>
      <br>

    </div>
    <button class="btn btn-primary" type="submit">Guardar</button>
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
