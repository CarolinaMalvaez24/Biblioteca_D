@extends('layouts.app')

@section("categorias")
    active
@endsection
@section('content')
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Categoria</b><br></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" class="">
            <div class="form-group row"><label class="col-2">Categoria</label>
              <div class="col-10"><input type="text" class="form-control" id="inputCategoria" placeholder="Nombre de la Categoria"></div>
            </div><button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
