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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <form id="c_form-h" method="POST" action="{{url('prestamos')}}">
            @csrf
            <div class="form-group row"><label class="col-2">Usuario</label>
              <div class="col-3"><select class="form-select @error('id_users')is-invalid @enderror" aria-label="Default select example" id="id_users" name="id_users">
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
            <div class="form-group row"><label class="col-2">Libro</label>
              <div class="col-3"><select class="form-select @error('id_libros')is-invalid @enderror" aria-label="Default select example" id="id_libros" name="id_libros">
                  <option selected="" value="Open this select menu">Selecciona libro</option>
                  @foreach($libros as $libro)
                    <option value="{{$libro->id}}">{{$libro->descripcion}}</option>
                  @endforeach
                </select>
                @error('id_libros')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
@endsection
