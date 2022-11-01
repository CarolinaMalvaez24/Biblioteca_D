@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Autor</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{route('autores.update',$autore->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"><label class="col-2">Nombre del Autor</label>
                @error('nombre_autor')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              <div class="col-10"><input type="text" class="form-control @error('nombre_autor')is-invalid @enderror" id="nombre_autor" name="nombre_autor" value="{{$autore->nombre_autor}}"></div>
            </div><button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
