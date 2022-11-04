@extends('layouts.app')

@section("asigna_autores")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b class="text-center">Agregar autor a libro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" method="POST" action="{{url('asigna_autores')}}">
              @csrf
            <div class="form-group row"><label class="col-2">Libro</label>
              <div class="col-3"><select class="form-select" aria-label="Default select example"id="id_libro" name="id_libro">
                  <option selected="" value="Open this select menu">Seleccionar libro</option>
                  @foreach($libro as $libro)
                    <option value="{{$libro->id}}">{{$libro->descripcion}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Autor</label>
              <div class="col-3"><select class="form-select" aria-label="Default select example" id="id_autores" name="id_autores">
                  <option selected="" value="Open this select menu">Seleccionar autor</option>
                  @foreach($autores as $autor)
                    <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>
                  @endforeach
                  
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
