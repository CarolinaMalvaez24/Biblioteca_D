@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Tabla Autores<br></h1>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Autores</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($autores as $datos)
                <tr>
                  <th>{{$loop->index+1}}</th>
                  <td>{{$datos->nombre_autor}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection