@extends('layouts.app')

@section('content')
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Libro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" class="">
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Descripcion</label>
              <div class="col-10">
                <input type="text" class="form-control" id="desc_tipo" required="required" placeholder="Descripcion del libro"> </div>
            </div>
            <div class="form-group row"><label class="col-2">Año</label>
              <div class="col-10"><input type="number" class="form-control" id="inlineFormInput" placeholder="Año del libro"></div>
            </div>
            <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><select checked="checked" class="form-control" id="InputEditorial" name="Editorial" required="required" style="	text: 0px 0px 4px black;">
                  <option selected=""> prueba </option>
                  <option value="1">Prueba 1</option>
                </select></div>
            </div>
            <div class="form-group row"><label class="col-2">Categoria</label>
              <div class="col-10"><select checked="checked" class="form-control" id="InputEditorial" name="Editorial" required="required" style="	text: 0px 0px 4px black;">
                  <option selected=""> prueba </option>
                  <option value="1">Prueba 1</option>
                </select></div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
