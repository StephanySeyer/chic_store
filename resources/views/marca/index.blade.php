@extends('layouts.app')

@section('title', 'Lista de marcas')

@section('content')
@include('sweetalert::alert')

//sweet p todos 3
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



<h1>Marcas</h1>
<div class="text-end">
    <a href="{{ route('marca.create') }}" class="btn btn-success">Crear</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">ORIGEN</th>
        <th scope="col">DISPONIBLE</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($marcas as $marca)
        <tr>
            <td>{{ $marca->id }}</td>
            <td>{{ $marca->nombre }}</td>
            <td>{{ $marca->origen }}</td>
            <td>{{ $marca->disponible }}</td>
            <td>
                <a href="{{ route('marca.update', $marca->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <form action="{{ route('marca.destroy', $marca->id)}}" method="post">
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
{{ $marcas->links('pagination::bootstrap-4') }}

@endsection
