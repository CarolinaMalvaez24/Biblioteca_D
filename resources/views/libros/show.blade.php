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
                    <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
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
                                <h4 style="" class="">Categorias</h4>
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
        @can('crear-prestamo')
        <div class="row d-flex justify-content-center">
            <div class="col-5 d-flex justify-content-center">
                <form id="c_form-h" method="POST" action="{{url('prestamos')}}">
                      @csrf
                      <div class="form-group row"><label class="col-2">Usuario</label>
                          <div class="col-10"><select class="form-select @error('users_id')is-invalid @enderror" aria-label="Default select example" id="users_id" name="users_id">
                                  <option selected="" value="Open this select menu">Elegir nombre de usuario</option>
                                  @foreach($usuarios as $usuario)
                                      <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                  @endforeach
                              </select>
                              @error('users_id')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="my-2 form-group row"><label class="col-2">Libro</label>
                          <div class="col-10"><select class="form-select @error('libros_id')is-invalid @enderror" aria-label="Default select example" id="libros_id" name="libros_id">
                                  <option selected="" value="Open this select menu">Selecciona libro</option>
                                  @foreach($libros as $libro)
                                      <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                                  @endforeach
                              </select>
                              @error('id_libros')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="text-center">
                      <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Agregar<br></button>
                      </div>
                  </form>
            </div>
        </div>
        @endcan
    </div>
@endsection