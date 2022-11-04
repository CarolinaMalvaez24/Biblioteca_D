@extends('layouts.app')

@section("tipos")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Tipo de Usuario</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" method="POST" action="{{url ('tipos')}}">
            @csrf
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Tipo</label>
              <div class="col-10">
                <input type="text" class="form-control @error('tipo')is-invalid @enderror" id="tipo" name="tipo"  placeholder="Agregar tipo de usuario"  value="{{old('tipo')}}">
                @error('tipo')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
                 </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
