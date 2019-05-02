@extends('layouts.master')

@section('title','Fecha del formato')

@section('contenido')


<form class="" action="{{ route('formatoFecha', ['formato'=> $formato, 'employee'=> $employeeId]) }}" method="POST">

  @csrf

<div class="row justify-content-center">
<div class="col-6 ">
  <h3>Elige la fecha del formato</h3>  <br>
  <input name="date" type="date" class="form-control" data-date-format="DD MM YYYY" required>
  <br>
  <div class="text-right">
    <button class="btn btn-primary" type="submit">Continuar</button>
  </div>
</div>
</div>
</form>

@endsection
