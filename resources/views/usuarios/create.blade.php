@extends('layouts.app')

@section('title', 'crear usuario')

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

    <h1>Crear usaurios</h1>

    <form action="{{ route('user.store') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
        </div>
        <br>
        <div>
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
        </div>
        <br>
        <div>
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
        <br>
        <div>
        <label for="role">Rol</label>
        <select name="role" class="form-control" required>
            <option value="Usuario" >Usuario</option>
            <option value="Admin" >Admin</option>
        </select>
        </div>
        <br>
        <button type="submit">ENVIAR</button>
        <a href="{{ route('user.index') }}">Regresar</a>
    </form>
</div>
@endsection