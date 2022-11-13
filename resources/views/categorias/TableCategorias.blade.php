@extends('layouts.app')

@section("categorias")
    active
@endsection
@section('content')
    <div class="py-1">
        <div class="container col-5">
            <div class="row">
                <div class="d-flex justify-content-center card">
                    <div class="card-body-body py-3">
                        <div class="container">
                            <div class="col-md-12">
                                <h1 class="text-center">Tabla Categorias<br></h1>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-dark text-capitalize border border-left border-right
                                border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                href="categorias/create">
                                <i class="bi bi-file-earmark-plus"></i>
                            </a>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered ">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Categorias</th>
                                            <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categoria as $datos)
                                            <tr>
                                                <th>{{$loop->index+1}}</th>
                                                <td>{{$datos->tipo_categoria}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-dark text-capitalize border border-left border-right
                                                            border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                           href="{{route('categorias.edit',$datos->id)}}">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <form action="{{route("categorias.destroy",$datos->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-dark text-capitalize border border-left border-right
                                                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                    type="submit">
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
@endsection
