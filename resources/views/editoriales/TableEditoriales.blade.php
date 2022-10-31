@extends('layouts.app')

@section("editoriales")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Tabla Editoriales<br></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center"><a class="btn btn-dark text-capitalize border border-left border-right border-top border-bottom border-light rounded-lg active text-decoration-none" href="#" target="_blank"><i class="fa fa-plus-square pr-1"></i>Nuevo registro</a></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Editoriales</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td><a class="btn btn-light btn-sm text-decoration-none w-25 h-25 pr-2 mr-2" href="#"><i class="fa fa-pencil bg-light w-25 h-25 border-left border-right border-top border-bottom border-light justify-content-start"></i></a><a class="btn btn-light btn-sm text-decoration-none w-25 h-25 pr-2 mr-2" href="#"><i class="fa fa-times bg-light w-25 h-25 border-left border-right border-top border-bottom border-light justify-content-start"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
