@extends('layouts.master')

@section('Titulo', 'Vigencias')

@section('contenido')
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-900">Lista de Vigencias</h1>
    <p class="mb-4">Aqui en esta secion podras imprimir el formato que tu desees sobre vigencias</p>
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
            <th scope="col">Empresa</th>
            <th scope="col"># Social</th>
            <th scope="col">RFC</th>
          </tr>
        </thead>
@foreach ($vigencias as $client)
  <br>
    <tbody>
      <div class="form">
          <td scope="row">{{ $client->name}}</th>
          <td>{{ $client->numero_seguro}}</td>
          <td>{{ $client->rfc}}</td>
      </div>
      </tbody>
    </div>
</table>
@endforeach
  @endsection
