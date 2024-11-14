@extends('layouts.app')

@section('title', 'Lista de usuarios')

@section('content')
@include('sweetalert::alert')

//sweet p todos 2
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



<h1>Usuarios</h1>
<div class="text-end">
    <a href="{{ route('user.create') }}" class="btn btn-success">Crear</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">CORREO</th>
        <th scope="col">ROL</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('user.update', $user->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <form action="{{ route('user.destroy', $user->id)}}" method="post">
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
{{ $users->links('pagination::bootstrap-4') }}

@endsection
