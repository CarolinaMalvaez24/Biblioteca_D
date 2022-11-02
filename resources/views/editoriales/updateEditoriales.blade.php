@extends('layouts.app')

@section("editoriales")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Editorial</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form  method="POST" action="{{route('editoriales.update',$editoriale->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><input type="text" class="form-control @error('nombre_editorial')is-invalid @enderror" placeholder="Nombre de la Editorial" id="nombre_editorial" name="nombre_editorial"
                value="{{$editoriale->nombre_editorial}}">
                @error('nombre_editorial')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div><button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
