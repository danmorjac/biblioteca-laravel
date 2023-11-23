@extends('plantilla')

@section('titulo', 'Nuevo libro')

@section('contenido')

<h1>Nuevo libro</h1>

<form action="{{ route('libros.store') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">
        @if ($errors->has('titulo'))
            <div class="text-danger">
                {{ $errors->first('titulo') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="editorial">Editorial:</label>
        <input type="text" class="form-control" name="editorial" id="editorial" value="{{ old('editorial') }}">
        @if ($errors->has('editorial'))
            <div class="text-danger">
                {{ $errors->first('editorial') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" class="form-control" name="precio" id="precio" value="{{ old('precio') }}">
        @if ($errors->has('precio'))
            <div class="text-danger">
                {{ $errors->first('precio') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($autores as $autor)
                <option value="{{ $autor->id }}">
                    {{ $autor->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">

</form>

@endsection
