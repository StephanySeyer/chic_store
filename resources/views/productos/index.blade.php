@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')
@include('sweetalert::alert')

//sweet p todos 1
@if (session('alert'))
    <script>
        swal.fire({
            title: '{{ session('alert')['title'] }}',
            text: '{{sesion('alert')['message'] }}',
            icon: '{{sesion('alert')['type'] }}',
            confirmButtonText: 'ok'
        })
        
    </script>
    @endif


<h1>Productos</h1>
<div class="text-end">
    <a href="{{ route('product.create') }}" class="btn btn-success">Crear</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">DESCRIPCION</th>
        <th scope="col">PRECIO</th>
        <th scope="col">STOCK</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->category }}</td>
            <td>
                <a href="{{ route('product.update', $product->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <form action="{{ route('product.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $products->links('pagination::bootstrap-4') }}

@endsection
