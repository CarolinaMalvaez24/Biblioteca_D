@extends('layouts.app')

@section("estantes")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b class="text-center">Actualizar Consulta a Usuario</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <form id="c_form-h" class="" style="">
            <div class="form-group row"><label class="col-2">Usuario</label>
              <div class="col-3"><select class="form-select" aria-label="Default select example">
                  <option selected="" value="Open this select menu">Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Libro</label>
              <div class="col-3"><select class="form-select" aria-label="Default select example">
                  <option selected="" value="Open this select menu">Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
@endsection