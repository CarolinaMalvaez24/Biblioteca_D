@extends('layouts.app')

@section("editoriales")
    active
@endsection
@section("content")
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><b>Actualizar Editorial</b></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-sm-4">
        <div class="row">
            <div class="d-flex justify-content-center card">
                <div class="card-body">
                    <div class="py-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form  method="POST" action="{{route('editoriales.update',$editoriale->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-2 ">Editorial</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control @error('nombre_editorial')is-invalid @enderror" placeholder="Nombre de la Editorial" id="nombre_editorial" name="nombre_editorial"
                                                                       value="{{$editoriale->nombre_editorial}}">
                                                @error('nombre_editorial')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="py-1 text-center">
                                            <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                                            border-top border-bottom border-light rounded-lg active text-decoration-none">Actualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
