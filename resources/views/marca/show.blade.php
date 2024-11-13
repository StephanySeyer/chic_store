@extends('layouts.app')

@section('title')
Marca #{{$marca->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<button class="boton_2"><a href="/marca" class="acciones">Volver a CRUD</a></button>
<br>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ORIGEN</th>
        <th>UBICACIÓN</th>
    </tr>
    <tr>
        <td>{{$marca->id}}</td>
        <td>{{$marca->nombre}}</td>
        <td>{{$marca->origen}}</td>
        <td>{{$marca->ubicacion}}</td>
    </tr>
</table>

@endsection
