@extends('layouts.master')

@section('Titulo', 'Ayuda')

@section('contenido')

  <div class="form">
  <ul class="list-unstyled">
    <li class="media">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/inicio2.jpg" alt="...">
      <br>
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1">INICIO DE SESIÓN</h5>
        El inicio de sesión es muy importante para poder estar dentro de esta interfaz,
        pero se tiene que tener en cuenta que solo el administrador podra realizar cuentas
      </div>
    </li>
    <li class="media my-4">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/bienvenida.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1">BIENVENIDA</h5>
        Este apartado es para dar a conocer de que se trata esta aplicación dando una pequeña reseña
        de que se trata el software que se esta desarrollando
      </div>
    </li>
    <li class="media">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/1.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1">LISTADO DE OPCIONES</h5>
        Este software esta dividido por diferentes modulos y uno de ellos, es el modulo de "Empleados" en el que el usuario podra elegir de dos opciones la cual se
        les proporciona
      </div>
    </li>
  </ul>
</div>
@endsection
