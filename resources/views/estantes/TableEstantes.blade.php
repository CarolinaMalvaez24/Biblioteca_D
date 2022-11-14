@extends('layouts.app')

@section("estantes")
    active
@endsection
@section("content")
    <div class="container col-sm-8">
        <div class="row">
            <div class="d-flex justify-content-center card">
                <div class="card-body">
                    <div class="col-md-12">
                        <h1 class="text-center">Tabla Prestamos<br></h1>
                    </div>
                </div>
                <div class="col-md-12 text-center my-1">
                    @can('crear-prestamo')
                        <a class="btn btn-dark text-capitalize border border-left border-right
                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                           href="prestamos/create">
                            <i class="bi-file-earmark-plus"></i>
                        </a>@endcan
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre de usuario</th>
                                    <th>Titulo del libro<br></th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($estante as $datos)
                                    <tr>
                                        <th>{{$loop->index+1}}</th>
                                        <td>{{$datos->name}}</td>
                                        <td>{{$datos->descripcion}}</td>
                                        <td>
                                            <div class="d-flex">
                                            @can('editar-prestamo')
                                                <a class="btn btn-dark text-capitalize border border-left border-right
                                                border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                   href="{{route('prestamos.edit',$datos->id)}}">
                                                   <i class="bi bi-pencil"></i>
                                                </a>@endcan
                                            @can('borrar-prestamo')
                                                <form action="{{route('prestamos.destroy',$datos->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-dark text-capitalize border border-left border-right
                                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                            type="submit">
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
@endsection
