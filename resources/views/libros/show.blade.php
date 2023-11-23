@extends('plantilla')

@section('titulo', 'Ficha de libro')

@section('contenido')
    <h1>Ficha de libro {{ $libro->id }}</h1>
    <p>Título: {{ $libro->titulo }}</p>
    <p>Editorial: {{ $libro->editorial }}</p>
    <p>Precio: {{ $libro->precio }}</p>

    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Borrar libro" />
    </form>

@endsection
