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
                <form class="user" action="{{ route('register') }}" method="POST" >
                  @csrf
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input  type="text" class="form-control form-control-user {{$errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Nombre" name="name" value="{{ old('name') }}" requiared autofocus>

                      @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                          {{ $errors->first('name') }}
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user {{$errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        {{ $errors->first('email') }}
                      </span>
                    @endif
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user {{$errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="password" required>

                      @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          {{ $errors->first('password') }}
                        </span>
                      @endif

                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password-confirm" name="password_confirmation" placeholder="Repetir contraseña" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Registrar Cuenta
                  </button>
                </form>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </body>

  @endsection
