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
        </tr>
        @endforeach
            {{-- </div> --}}
        </tbody>
        {{-- </div> --}}
        </table>

  @endsection
