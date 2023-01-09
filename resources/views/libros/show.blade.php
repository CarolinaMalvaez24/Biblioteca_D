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
                    <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="{{Storage::url($libro->image->url)}}"> </div>
                    <div class="px-md-5 p-3 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2" style="">
                        <div class="row">
                            <div class="col-md-12" style="">
                            <h1 class="" style="">Titulo del libro</br>
                            <span class="badge badge-light"></span></h1>
                            {{$libros->titulo}}
                            </div>
                        </div>
                        <div class="my-3 row d-flex">
                            <div class="my-3 col-10">
                                <h4 class="">Año de publicacion</h4>
                                {{$libros->anio}}
                            </div>
                            <div class="my-3 col-2">
                                <h4 style="" class="">Editorial</h4>
                                {{$libros->editoriales->nombre_editorial}}
                            </div>
                        </div>
                        <div class="mx-auto">
                            <h3 class="mx-auto" style="">Descripcion del libro <span class="badge badge-light"></span></h3>
                            <p class="mb-3 lead" style="">{{$libros->descripcion}}</p>
                        </div>
                        <div class="row d-flex">
                            <div class="col-10">
                                <h4 style="" class="">Autores</h4>
                                @foreach($libros -> autores as $autor)
                                <div>
                                    {{$autor->nombre_autor}}
                                </div>
                             @endforeach
                            </div>
                            <div class="col-2">
                                <h4 style="" class="">Categorias</h4>
                                @foreach($libros -> categorias as $categoria)
                                <div>
                                    {{$categoria->tipo_categoria}}
                                </div>
                             @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
        {{--  @can('crear-prestamo')
        <div class="row d-flex justify-content-center">
            <div class="col-5 d-flex justify-content-center">
                <form id="c_form-h" method="POST" action="{{url('prestamos')}}">
                      @csrf
                      <input type="hidden" name="users_id" value="{{auth()->user()->id}}">
                      <input type="hidden" name="libros_id" value="{{$libros->id}}">
                  
                      <div class="text-center">
                      <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Agregar<br></button>
                      </div>
                  </form>
            </div>
        </div>
        @endcan  --}}
    </div>
@endsection