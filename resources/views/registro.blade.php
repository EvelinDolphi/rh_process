@extends('layouts.master')

@section('Titulo', 'Registrate')

@section('contenido')

  <body class="bg-gradient-danger">

    <div class="container">
      <div class="justify-content-center">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block"></div>
            <div class="col-lg-9">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Crea una cuenta!</h1>
                </div>
                <form class="user">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Apellido">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir contraseña">
                    </div>
                  </div>
                  <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Registrar Cuenta
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="login.html">Ya tienes una cuenta? Inicia sesión!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  </body>

  </html>
  @endsection
