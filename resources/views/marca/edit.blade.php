@extends('layouts.app')

@section('title','Tienda de Maquillaje | Editar marca')

@section('content')
<h1>Editar marca</h1>
<form action="/marca/{{$marca->id}}" method="post">
    @csrf
    @method('PUT')
    <label>
        Nombre: 
        <input type="text" name="nombre" value="{{$marca->nombre}}">
    </label>
    <br>
    <label>
        Origen: 
        <input type="text" name="origen" value="{{$marca->origen}}">
   
