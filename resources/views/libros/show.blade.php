@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    @foreach($libros as $libro)
         <h1>{{$libro->titulo}}</h1>
         <h1>{{$libro->anio}}</h1>
         <h1>{{$libro->descripcion}}</h1>
         @foreach($libro as $categoria)
         <h1>{{$libro->categorias as tipo_categoria}}</h1>
        @endforeach
    @endforeach
    
@endsection