@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="pt-5" style="">
                <div class="container">
                  <div class="row">
                    @foreach($libros as $libro)
                    <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="{{url("img/Libros.jpg")}}"> </div>
                    <div class="px-md-5 p-3 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2" style="">
                        <div class="row">
                            <div class="col-md-12" style="">
                            <h1 class="" style="">Titulo del libro</br>
                            <span class="badge badge-light"></span></h1>
                            {{$libro->titulo}}
                            </div>
                        </div>
                        <div class="my-3 row d-flex">
                            <div class="my-3 col-10">
                                <h4 class="">Año de publicacion</h4>
                                {{$libro->anio}}
                            </div>
                            <div class="my-3 col-2">
                                <h4 style="" class="">Editorial</h4>
                                {{$libro->editoriales->nombre_editorial}}
                            </div>
                        </div>
                        <div class="mx-auto">
                            <h3 class="mx-auto" style="">Descripcion del libro <span class="badge badge-light"></span></h3>
                            <p class="mb-3 lead" style="">{{$libro->descripcion}}</p>
                        </div>
                        <div class="row d-flex">
                            <div class="col-10">
                                <h4 style="" class="">Autores</h4>
                                @foreach($libro -> autores as $autor)
                                <div>
                                    {{$autor->nombre_autor}}
                                </div>
                             @endforeach
                            </div>
                            <div class="col-2">
                                <h4 style="" class="">Categoria</h4>
                                @foreach($libro -> categorias as $categoria)
                                <div>
                                    {{$categoria->tipo_categoria}}
                                </div>
                             @endforeach
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection