@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif

    <div class="mb-3">
        <span class="">Nueva nota</span>
        <a href="/notas" class="btn btn-primary btn-sm float-right text-white" >Volver</a>
    </div>    

    <form action="{{ route('notas.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nombre" id="" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descripcion" id="" placeholder="Descripcion">
        </div>
        <button class="btn btn-primary" type="submit">Agregar</button>
    </form>

</div>

@endsection