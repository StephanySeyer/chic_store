@extends('layouts.app')

@section('title', 'Modificar marca')

@section('content')

<div class="container">

    <h1>Editar marcas</h1>

    <form action="{{ route('marca.update.data', $marca->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{ $marca->nombre }}">
        </div>
        <br>
        <div>
            <label for="origen" class="form-label">Origen</label>
            <textarea class="form-control" id="origen" name="origen" placeholder="Descripción de origen">{{$marca->origen }} </textarea>
        </div>
        <br>
        <div>
            <label for="disponible" class="form-label">Disponible</label>
            <input type="number" class="form-control" id="" name="disponible" placeholder="disponible" value="{{$marca->disponible}}">
        </div>
        <br>
        <button type="submit" >MODIFICAR</button>
        <a href="{{ route('product.index') }}">Regresar</a>
    </form>
</div>
@endsection