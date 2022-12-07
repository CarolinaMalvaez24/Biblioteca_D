@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="container ">
        <div class="row d-flex justify-content-center">
        @foreach($libros as $libro)
            <h1>Titulo</h1>
             <h4>{{$libro->titulo}}</h4></br>
            <h1>Año de publicacion</h1>
             <h4>{{$libro->anio}}</h4>
            <h1>Descripcion del libro</h1>
             <h4>{{$libro->descripcion}}</h4>
            <h1>Editorial del libro</h1>
             <h4>{{$libro->editoriales->nombre_editorial}}</h4>

            <h1>Categorias del libro</h1>
             @foreach($libro -> categorias as $categoria)
                <div>
                    <h4>{{$categoria->tipo_categoria}}</h4>
                </div>
             @endforeach

            <h1>Autores del libro</h1>
             @foreach($libro -> autores as $autor)
                <div>
                    <h4>{{$autor->nombre_autor}}</h4>
                </div>
             @endforeach
        @endforeach
        </div>
    </div>
    
@endsection