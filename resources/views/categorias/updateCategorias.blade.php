@extends('layouts.app')

@section("categorias")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Categoria</b><br></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" method="POST" action="{{route('categorias.update',$categoria->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"><label class="col-2">Categoria</label>
              <div class="col-10"><input type="text" class="form-control @error('tipo_categoria')is-invalid @enderror" id="tipo_categoria" name="tipo_categoria" placeholder="Nombre de la Categoria" value="{{$categoria->tipo_categoria}}">
                @error('tipo_categoria')
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
