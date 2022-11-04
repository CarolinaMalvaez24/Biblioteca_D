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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" method="post" action="{{url('editoriales')}}">
            @csrf
            <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><input type="text" class="form-control @error('nombre_editorial')is-invalid @enderror" placeholder="Nombre de la Editorial" id="nombre_editorial" name="nombre_editorial" value="{{old('nombre_editorial')}}">
                @error('nombre_editorial')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div><button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
