@extends('layouts.master')

@section('Titulo', 'Ayuda')

@section('contenido')

  <div class="form">
  <ul class="list-unstyled">
    <li class="media">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/inicio2.jpg" alt="...">
      <br>
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align= 'center'>INICIO DE SESIÓN
        </p></h5>
        El inicio de sesión es muy importante para poder estar dentro de esta interfaz,
        pero se tiene que tener en cuenta que solo el administrador podra realizar cuentas
      </div>
    </li>
    <br>
    <br>
    <br>
    <li class="media my-4">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/bienvenida.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align= 'center'>BIENVENIDA</p></h5>
        Este apartado es para dar a conocer de que se trata esta aplicación dando una pequeña reseña
        de que se trata el software que se esta desarrollando
      </div>
    </li>
    <br>
    <br>
    <br>
    <li class="media">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/empleados.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align='center'>EMPLEADOS</p></h5>
        Este software esta dividido por diferentes modulos y uno de ellos, es el modulo de "Empleados" en el que el usuario podra elegir de dos opciones la cual se
        les proporciona, las opciones son "Ingresar empleado" y "Lista de empleados"
      </div>
    </li>
    <br>
    <br>
    <br>
    <li class="media">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/vigencias.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align='center'>VIGENCIAS</p></h5>
        El siguiente modulo es el de "Vigencias", este modulo es para oder ingresar una vigencia y pueda estar de respaldo como una base de datos pero en un software y automaticamente aparecera en "Lista de vigencias"
      </div>
    </li>
    <br>
    <br>
    <br>
    <li class="media">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/2.jpg" alt="...">
      <br>
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align='center'>INGRESAR EMPLEADO</p></h5>
        <p align= 'justify'> El ingresar empleado consta de dos modulos en los cuales el usuario administrador puede hacer el llenado de un nuevo empleado, estos dos modulos requieren información
        personal y de la empresa. Solo debes de dar click en la opción de "EMPLEADO" y saldra una lista en donde tendras que dar clic en "INGRESAR EMPLEADO", debes saber que
        los datos que te piden debes llenarlo de acuerdo a lo que se te pide, no debes poner numero en donde van letra, ni letran en donde van numeros.</p>
      </div>
    </li>
    <br>
    <br>
    <br>
    <li class="media">
      <img class="intro-img img-fluid mb-6 mb-lg-0 rounded" src="img/3.jpg" alt="...">
      <div class="media-body">
        <h5 style="color:orange;" class="mt-3 mb-1"><p align='center'>LISTA DE EMPLEADOS</p></h5>
        <p align= 'justify'>La lista de empleado consiste en la información del llenado de los dos formularios de empleado, aparecera el nombre de la persona de la aque se lleno la informacóna
        en esta opción cualquier usuario podra imprimir uno de los 8 formatos que tiene para cada uno de los empleados. Al igual esta un botón de eliminar, ese botón solo lo va a poder
        ocupar la persona administradora del software.</p>
      </div>
    </li>
  </ul>
</div>
@endsection
