<img src="{{asset('img/Puratos.png')}}" width="180" alt="">
<img src="{{asset('img/lineas.jpg')}}" ALIGN=RIGHT width="350" height="50" alt="...">
<br>
<br>
<div id="company">
  <h2  class="name"><p align= 'center'>CARÁTULA DE EXPEDIENTE
  </p></h2>
  <h2>Numero de expediente:</h2>
</div>
<table border="1">
  <tbody>
    <tr>
      <th scope="row">Nombre:</th>
      <td colspan="2">{{$nameE}}</td>
    </tr>
    <tr>
      <th scope="row">Fecha de Nacimiento:</th>
      <td colspan="2">{{$cumpleaños}}</td>
    </tr>
    <tr>
      <th scope="row">Dirección:</th>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th scope="col">Calle:</th>
      <th scope="col">Número:</th>
      <th scope="col">Colonia:</th>
    </tr>
    <tr>
      <th scope="col">{{$address}}</th>
      <th scope="col">{{$addressN}}</th>
      <th scope="col">{{$addressC}}</th>
    </tr>
      <tr>
        <th scope="col">Código Postal:</th>
        <th scope="col">Municipio:</th>
        <th scope="col">Estado:</th>
      </tr>
    <tr>
      <th scope="col">{{$addressCO}}</th>
      <th scope="col">{{$addressM}}</th>
      <th scope="col">{{$addressES}}</th>
    </tr>
      <tr>
        <th scope="col">Teléfono:</th>
        <th scope="col">Estado Civil:</th>
        <th scope="col">Número de hijos:</th>
      </tr>
    <tr>
      <th scope="col"></th>
      <th scope="col">{{$estado_civil}}</th>
      <th scope="col">{{$numero_hijos}}</th>
    </tr>
    <tr>
      <th scope="row">IMMS:</th>
      <td colspan="2">{{$seguroE}}</td>
    </tr>
    <tr>
      <th scope="row">CURP:</th>
      <td colspan="2">{{$curpE}}</td>
    </tr>
    <tr>
      <th scope="row">RFC:</th>
      <td colspan="2">{{$rfcE}}</td>
    </tr>
    <tr>
      <th scope="row">Número de cuenta nomina:</th>
      <td colspan="2">{{$bank}}</td>
    </tr>
      <tr>
        <th scope="col">Puesto:</th>
        <th scope="col">Área:</th>
        <th scope="col">Delegación:</th>
      </tr>
    <tr>
      <th scope="col">{{$department}}</th>
      <th scope="col">{{$area}}</th>
      <th scope="col">{{$delegacion}}</th>
    </tr>
    <tr>
      <th scope="row">Jefe Inmediato:</th>
      <td colspan="2"></td>
    </tr>
      <tr>
        <th scope="col">Fecha de Ingreso:</th>
        <th scope="col">Sueldo de contratación</th>
        <th scope="col">Status:</th>
      </tr>
    <tr>
      <th scope="col">{{$fecha_altaE}}</th>
      <th scope="col">{{$sueldo}}</th>
      <th scope="col"></th>
    </tr>
    <tr>
      <th scope="row">En caso de emergencia avisar a:</th>
      <td colspan="2">{{$emergency}}</td>
    </tr>
    <tr>
      <th scope="row">Dirección:</th>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th scope="col">Calle:</th>
      <th scope="col">Número:</th>
      <th scope="col">Colonia:</th>
    </tr>
    <tr>
      <th scope="col">{{$addressE}}</th>
      <th scope="col">{{$addressNE}}</th>
      <th scope="col">{{$addressCE}}</th>
    </tr>
      <tr>
        <th scope="col">Código Postal:</th>
        <th scope="col">Municipio:</th>
        <th scope="col">Estado:</th>
      </tr>
    <tr>
      <th scope="col">{{$addressCOE}}</th>
      <th scope="col">{{$addressME}}</th>
      <th scope="col">{{$addressESE}}</th>
    </tr>
  </tbody>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
