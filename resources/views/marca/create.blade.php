@extends('layouts.app')

@section('title','Biblioverse | Crear Elemento')

@section('content')
<h1>Crear Elemento</h1>
<form action="{{route('store')}}" method="post">
    @csrf
    <label>
        Nombre: 
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Origen: 
        <input type="text" name="origen">
    </label>
    <br>
    <label>
        Ubicación:
        <input type="text" name="ubicacion">
    </label>
    <br>
    <button type="submit">
        Crear marca
    </button>
</form>
@endsection
