@extends('layouts.app')

@section('content')

<div class="container my-4">
    
    @if (session('mensaje'))
    <div class="alert alert-success" role="alert">
        <strong>{{ session('mensaje') }}</strong>
    </div>
    @endif
    
    <div class="container mb-3">
        <span class="">Notas de {{ auth()->user()->name }}</span>
        <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right text-white" >Agregar</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notas as $item)
            <tr>
                <td scope="row">{{ $item->id }}</td>
                <td>
                    <a>{{ $item->nombre }}</a>
                </td>
                <td>
                    {{ $item->descripcion }}
                </td>
                <td>
                <a href="{{ route('notas.edit', $item) }}" class="btn btn-warning btn-sm">Editar</a>
                
                <form action="{{ route('notas.destroy', $item) }}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- paginacion --}}
    {{ $notas->links() }}

</div>

@endsection
