@extends('layouts.app')

@section("editoriales")
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="text-center">Tabla Editoriales<br></h1>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        @can('crear-editorial')
                                        <a class="btn btn-dark text-capitalize border border-left border-right
                                            border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                          href="editoriales/create" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Nuevo Registro">
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
                                                        <th>Editoriales</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($editorial as $datos)
                                                        <tr>
                                                            <th>{{$loop->index+1}}</th>
                                                            <td>{{$datos->nombre_editorial}}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    @can('editar-editorial')
                                                                    <a href="{{route('editoriales.edit',$datos->id)}}" class="btn btn-dark text-capitalize border border-left border-right
                                                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                       data-toggle="tooltip" rel="tooltip" data-placement="top" title="Editar dato">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </a>
                                                                    @endcan
                                                                    @can('borrar-editorial')
                                                                    <form action="{{route('editoriales.destroy',$datos->id)}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-dark text-capitalize border border-left border-right
                                                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                                type="submit"
                                                                                data-toggle="tooltip" rel="tooltip" data-placement="top" title="Eliminar dato">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </button>
                                                                    </form>
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
        </div>
    </div>
  </div>
@endsection
