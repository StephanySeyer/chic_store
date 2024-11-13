@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')

<div class="container">

    <h1>Editar usuarios</h1>

    <form action="{{ route('user.update.data', $user->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div>
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ $user->name }}">
        </div>
        <br>
        <div>
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="{{ $user->email }}">
        </div>
        <br>
        <button type="submit">MODIFICAR</button>
        <a href="{{ route('user.index') }}">Regresar</a>
    </form>
</div>
@endsection