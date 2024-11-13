@extends('layouts.app')

@section('title', 'crear producto')

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

    <h1>Crear productos</h1>

    <form action="{{ route('product.store') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
        </div>
        <br>
        <div>
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" placeholder="Descripción del producto"></textarea>
        </div>
        <br>
        <div>
            <label for="price" class="form-label">Precio</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
        </div>
        <br>
        <div>
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
        </div>
        <br>
        <div>
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Categoria">
        </div>
        <br>
        <button type="submit" >ENVIAR</button>
        <a href="{{ route('product.index') }}">Regresar</a>
    </form>
</div>
@endsection