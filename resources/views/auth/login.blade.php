@extends('layouts.bienvenida')

@section('Titulo', 'Inicio de sesión')

@section('contenido')
{{-- login en proceso... --}}

<form method="POST" action="{{ route('login') }}">
  @csrf
<body class="bg-white">

  <div class="container">

    <div class="row justify-content-center">
      <a class="navbar-brand" href="index.html">
          <img src="img/logo_reprocess.png">
        </a>

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-md-9 col-lg-12">
                <div class="p-5">
                  <div style="text-align:center;">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Inicio de sesión</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid ' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Ingresar Email" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="contraseña" name="password" required>

                     @if ($errors->has('password'))
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                         </span>
                     @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <!-- <label class="custom-control-label" for="customCheck">Recordar</label> -->
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Iniciar Sesión
                    </button>
                  <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy;RH Process</p>
    </div>
  </footer>

@endsection
