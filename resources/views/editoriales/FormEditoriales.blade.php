@extends('layouts.app')

@section('content')
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
          <form id="c_form-h" class="">
            <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><input type="text" class="form-control" placeholder="Nombre de la Editorial" id="inputEditorial"></div>
            </div><button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
