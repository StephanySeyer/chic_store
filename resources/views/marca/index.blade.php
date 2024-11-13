@extends('layouts.app')

@section('title','Tienda de Maquillaje | Marca')

@section('content')
@include('sweetalert::alert')
    <h1>Marcas registradas</h1>

    <a href="/marca/crear" class="btn btn-primary">Nueva marca</a>
    <br>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th> 
            <th>ORIGEN</th>
            <th>UBICACIÓN</th>
            <th>MOSTRAR</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>

        @foreach ($marcas as $marca)
            <tr>
                <td><h3>{{ $marca->id }}</h3></td>
                <td><h3>{{ $marca->nombre }}</h3></td>
                <td><h3>{{ $marca->origen }}</h3></td>
                <td><h3>{{ $marca->ubicacion }}</h3></td>
                <td>
                    <button class="btn btn-success"><a href="/marca/{{ $marca->id }}" class="acciones">MOSTRAR</a></button>
                </td>
                <td>
                    <button class="btn btn-warning"><a href="/marca/{{ $marca->id }}/editar" class="acciones">EDITAR</a></button>
                </td>
                <td>
                    <form action="/marca/{{ $marca->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-danger">ELIMINAR</button>
                    </form>
                </td>
            </tr>    
        @endforeach
    </table>

{{ $marcas->links() }}
@endsection
