@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div>
        @foreach($libros as $libro)
         <h1>{{$libro->titulo}}</h1>
         <h1>{{$libro->anio}}</h1>
         <h1>{{$libro->descripcion}}</h1>
         <h1>{{$libro->editoriales->nombre_editorial}}</h1>
         @foreach($libro -> categorias as $categoria)
            <div>
                <h1>{{$categoria->tipo_categoria}}</h1>
            </div>
         @endforeach

         @foreach($libro -> autores as $autor)
            <div>
                <h1>{{$autor->nombre_autor}}</h1>
            </div>
         @endforeach


    @endforeach
    </div>
    
    
@endsection