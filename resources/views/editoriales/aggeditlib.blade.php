@extends('layouts.app')

@section("editoriales")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Editorial</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
      <div class="container col-sm-4">
          <div class="row">
              <div class="d-flex justify-content-center card">
                  <div class="card-body">

                      <form id="c_form-h" method="POST" action="{{url('aggedit')}}">
                          @csrf
                          <div class="form-group d-flex"><label class="col-2">Editorial</label>
                              <div class="d-flex col-10"><input type="text" class="form-control @error('nombre_editorial')is-invalid @enderror" placeholder="Nombre de la Editorial" id="nombre_editorial" name="nombre_editorial" value="{{old('nombre_editorial')}}">
                                  @error('nombre_editorial')
                                  <div class="invalid-feedback">{{$message}}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="text-center">
                               <button type="submit" class="mt-3 btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-non">Agregar</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
