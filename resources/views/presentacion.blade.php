@extends('layouts.master')

@section('Titulo', 'Evelin')

@section('contenido')

    {{-- <h2 style="color:black;"><center>Bienvenido a RH Process</center></h2> --}}
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <h1 style="color:orange;" class="mt-3 mb-1">Bienvenido a RH Process</h1>
              </h2>
              <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/777.jpg" alt="">
              <br>
              <br>
              <h4 style="color:black;"> Desarrollo de un software para el llenado automatico de formatos que el area de recursos humanos
                de la empresa Puratos elabora. Este software hará uso de ventajas y mejoras de comunicación para la facilidad de imprimir y guardar un formato. </h4>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>

    @if ($errors->has('success'))

      <script type="text/javascript">
      $.alert({
        title: 'Exitoso',
        content: 'registro creado correctamente',
      });
      </script>

    @endif



  @endsection
