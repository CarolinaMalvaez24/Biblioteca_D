@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-1">
      <div class="container col-12">
          <div class="row">
              <div class="d-flex justify-content-center card">
                  <div class="card-body">
                      <div class="py-3">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h1 class="text-center">Tabla Libros<br></h1>
                                  </div>
                              </div>
                              <div class="col-md-12 text-center">
                                  @can('crear-libro')
                                      <a href="libros/create" class="btn btn-dark text-capitalize border border-left border-right
                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                         data-toggle="tooltip" rel="tooltip" data-placement="top" title="Nuevo Registro">
                                          <i class="bi bi-file-earmark-plus"></i>
                                      </a>
                                  @endcan
                              </div>
                              <div class="row py-1">
                                  <div class="col-md-12">
                                      <div class="table-responsive">
                                          <table class="table table-bordered ">
                                              <thead class="thead-dark">
                                              <tr>
                                                  <th>#</th>
                                                  <th>Titulo</th>
                                                  <th>Año</th>
                                                  <th>Opciones</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              @foreach($libro as $datos)
                                                  <tr>
                                                      <th>{{$loop->index+1}}</th>
                                                      <td>{{$datos->titulo}}</td>
                                                      <td>{{$datos->anio}}</td>
                                                      <td>
                                                          <div class="d-flex">
                                                              @can('editar-libro')
                                                                  <a class="btn btn-dark text-capitalize border border-left border-right
                                                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1" href="{{route('libros.edit',$datos->id)}}"
                                                                     data-toggle="tooltip" rel="tooltip" data-placement="top" title="Editar datos">
                                                                      <i class="bi bi-pencil"></i>
                                                                  </a>
                                                                @endcan
                                                              @can('borrar-libro')
                                                                  <form action="{{route('libros.destroy',$datos->id)}}" method="post">
                                                                      @csrf
                                                                      @method('delete')
                                                                      <button class="btn btn-dark text-capitalize border border-left border-right
                                                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                              type="submit" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Eliminar datos">
                                                                          <i class="bi bi-trash3"></i>
                                                                      </button>
                                                                  </form>
                                                              @endcan
                                                              @can('ver-libro')
<<<<<<< HEAD
                                                                <a class="btn btn-dark text-capitalize border border-left border-right
                                                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1" href="{{route('libros.show',$datos->id)}}"
                                                                        data-toggle="tooltip" rel="tooltip" data-placement="top" title="Editar datos">
                                                                        <i class="bi bi-eye"></i>
                                                                </a>
=======
                                                              <a class="btn btn-dark text-capitalize border border-left border-right
                                                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1" href="{{route('libros.show',$datos->id)}}"
                                                                     data-toggle="tooltip" rel="tooltip" data-placement="top" title="Ver datos">
                                                                      <i class="bi bi-eye"></i>
                                                                  </a>
>>>>>>> b841ba7a94dc824fc0c8f917124919d953526b40
                                                              @endcan
                                                          </div>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
