@extends('layouts.master')

@section('Titulo', 'Lista Empleados')

@section('contenido')


  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-900">Lista Empleados</h1>
    <p class="mb-4">Aqui en esta secion podras imprimir el formato que tu desees, pero antes debiste de haber guardado los datos del empleado.</p>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          </div>
        </div>
        </div>
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Formatos</th>
          </tr>
        </thead>
        <br>
          <tbody>
            {{-- <div class="form"> --}}
        @foreach ($employees as $employee)
        <tr>
          <th scope="row">{{ $employee->numero_empleado}}</th>
          <td>{{ $employee->name}}</td>
          <td>{{ $employee->first_lastname}}</td>
          <td>{{ $employee->second_lastname}}</td>
          <td>
            <a href="#" class="btn btn-danger btn-xs">Eliminar</a>

          </td>
          <td>
            <div class= " btn btn-primary btn-sm float-right">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Imprimir
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'bancomer', 'employee'=> $employee->id]) }}">CARTA BANCOMER</a>
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'soriana', 'employee'=> $employee->id]) }}">CARTA SORIANA</a>
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'cityfresko', 'employee'=> $employee->id]) }}">CITY FRESCO</a>
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'waltmart', 'employee'=> $employee->id]) }}">CARTA WALTMART</a>
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'cartapatronal', 'employee'=> $employee->id]) }}">CARTA PATRONAL</a>
              <a class="dropdown-item" href="{{ route('formato', ['formato'=> 'expediente', 'employee'=> $employee->id]) }}">EXPEDIENTE</a>
            </div>
            </div>

          </td>

        </tr>

        @endforeach
            {{-- </div> --}}
        </tbody>
        {{-- </div> --}}
        </table>

  @endsection
