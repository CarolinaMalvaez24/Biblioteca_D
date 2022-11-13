@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Autor</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
      <div class="container col-sm-4">
          <div class="row">
              <div class="d-flex justify-content-center card">
                  <div class="card-body">
                      <form id="c_form-h" method="POST" action="{{url ('autores')}}">
                          @csrf
                          <div class="form-group row">
                              <label class="col-4">Nombre del Autor</label>
                              <div class="col-8">
                                  <input type="text" class="form-control @error('nombre_autor')is-invalid @enderror" placeholder="Nombre del autor" id="nombre_autor" name="nombre_autor" value="{{old('nombre_autor')}}">
                                  @error('nombre_autor')
                                  <div class="invalid-feedback">{{$message}}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="mt-2 btn btn-dark text-capitalize border border-left border-right
                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1">
                                  Agregar
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
