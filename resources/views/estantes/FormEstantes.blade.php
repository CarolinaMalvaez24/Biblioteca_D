@extends('layouts.app')

@section("estantes")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b class="text-center">Generar Nuevo Prestamo</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container col-sm-4">
      <div class="row">
          <div class="d-flex justify-content-center card">
              <div class="card-body">
                  <form id="c_form-h" method="POST" action="{{url('prestamos')}}">
                      @csrf
                      <div class="form-group row"><label class="col-2">Usuario</label>
                          <div class="col-10"><select class="form-select @error('id_users')is-invalid @enderror" aria-label="Default select example" id="id_users" name="id_users">
                                  <option selected="" value="Open this select menu">Elegir nombre de usuario</option>
                                  @foreach($usuarios as $usuario)
                                      <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                  @endforeach
                              </select>
                              @error('id_users')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="my-2 form-group row"><label class="col-2">Libro</label>
                          <div class="col-10"><select class="form-select @error('id_libros')is-invalid @enderror" aria-label="Default select example" id="id_libros" name="id_libros">
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
      </div>
  </div>
@endsection
