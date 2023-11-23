<nav>
    <a href="{{ route('inicio') }}">Inicio</a>
    &nbsp;&nbsp;
    <a href="{{ route('libros.index') }}">Listado de libros</a>
    &nbsp;&nbsp;
    <a href="{{ route('libros.create') }}">Nuevo libro</a>
    &nbsp;&nbsp;
    @if(auth()->check())
    <a href="{{ route('logout') }}">Logout</a>
    &nbsp;&nbsp;
    Bienvenido/a {{ auth()->user()->nombre }};
    @endif
    &nbsp;&nbsp;
</nav>
