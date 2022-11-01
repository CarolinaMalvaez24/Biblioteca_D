@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Autor</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" method="POST" action="{{url ('autores')}}">
            @csrf
            <div class="form-group row"><label class="col-2 @error('nombre_autor')is-invalid @enderror" value="{{old('nombre_autor')}}">
            Nombre del Autor</label>
                @error('nombre_autor')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              <div class="col-10"><input type="text" class="form-control" id="nombre_autor"  name="nombre_autor" placeholder="Nombre del autor del libro"></div>
            </div><button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
