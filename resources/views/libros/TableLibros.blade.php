@extends('layouts.app')

@section('content')
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar8" style="">
        <p class="navbar-brand text-primary mb-0">
          <i class="fa d-inline fa-lg fa-stop-circle"></i> BRAND </p>
      </button>
      <div class="collapse navbar-collapse" id="navbar8">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Mi cuenta</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Editoriales<br></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Categorias<br></a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-github fa-fw fa-lg"></i>
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-gitlab fa-fw fa-lg"></i>
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-bitbucket fa-fw fa-lg"></i>
            </a> </li>
        </ul>
        <a class="btn btn-default navbar-btn"><i class="fa fa-user fa-fw"></i>Sign in</a>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Tabla Libros<br></h1>
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
                  <th>Descripcion</th>
                  <th>Año</th>
                  <th>Id_editorial</th>
                  <th>id_categoria</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>Mark</td>
                  <td>Mark</td>
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
