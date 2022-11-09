@extends('plantilla')
@section('contenido')
<h1 class="mt-4 display-1 text-center">Home</h1>
<br>
<br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">No.Computadora</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Oscar</td>
      <td>3</td>
      <td>30min</td>
      <td>Wed-Nov-2022</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Andre</td>
      <td>2</td>
      <td>1h</td>
      <td>Wed-Nov-2022</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jesus</td>
      <td>1</td>
      <td>1h & 30min</td>
      <td>Wed-Nov-2022</td>
    </tr>
  </tbody>
</table>

@stop