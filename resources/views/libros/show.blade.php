@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    @foreach($libros as $libro)
         <h1>{{$libro->titulo}}</h1>
         <h1>{{$libro->anio}}</h1>
         <h1>{{$libro->descripcion}}</h1>
    @endforeach
    
@endsection