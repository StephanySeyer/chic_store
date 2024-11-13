@extends('layouts.app')

@section('title', 'Modificar producto')

@section('content')

<div class="container">

    <h1>Editar productos</h1>

    <form action="{{ route('product.update.data', $product->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div>
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ $product->name }}">
        </div>
        <br>
        <div>
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" placeholder="Descripción del producto">{{ $product->description }} </textarea>
        </div>
        <br>
        <div>
            <label for="price" class="form-label">Precio</label>
            <input type="number" class="form-control" id="" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <br>
        <div>
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" id="" placeholder="Stock" value="{{$product->stock}}">
        </div>
        <br>
        <div>
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="category" id="" value="{{ $product->category }}">
        </div>
        <br>
        <button type="submit" >MODIFICAR</button>
        <a href="{{ route('product.index') }}">Regresar</a>
    </form>
</div>
@endsection