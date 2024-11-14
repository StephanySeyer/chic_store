@extends('layouts.app')

@section('title', 'crear marca')

@section('content')

<div class="container">
    @if($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <h1>Crear marcas</h1>
        
    <form action="{{ route('marca.store') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
        </div>
        <br>
        <div>
            <label for="origen" class="form-label">Origen</label>
            <textarea class="form-control" id="origen" name="origen" placeholder="Descripción del producto"></textarea>
        </div>
        <br>
        <div>
            <label for="disponible" class="form-label">Disponible</label>
            <input type="number" class="form-control" id="disponible" name="disponible" placeholder="disponible">
        </div>
        <br>
        <button type="submit" >ENVIAR</button>
        <a href="{{ route('marca.index') }}">Regresar</a>
    </form>
</div>
@endsection
