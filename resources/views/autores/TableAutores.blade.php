@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
    <div class="py-1">
        <div class="container col-5">
            <div class="row">
                <div class="d-flex justify-content-center card">
                    <div class="card-body-body py-3">
                        <div class="container">
                            <div class="col-md-12">
                                <h1 class="text-center">Tabla Autores<br></h1>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center py-1">
                                    <a class="btn btn-dark text-capitalize border border-left border-right
                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                       href="autores/create" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Nuevo Registro">
                                        <i class="bi bi-file-earmark-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-mx-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
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
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="btn btn-dark text-capitalize border border-left border-right
                                border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                               href="{{route('autores.edit',$datos->id)}}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Editar dato">
                                                                <i class="bi bi-pencil"></i></a>
                                                            <form action="{{route("autores.destroy",$datos->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-dark text-capitalize border border-left border-right
                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                        type="submit" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Eliminar dato">
                                                                    <i class="bi bi-trash3"></i>
                                                                </button>
                                                            </form>
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
@endsection
