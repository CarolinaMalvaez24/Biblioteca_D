@extends('layouts.app')

@section("libros")
    active
@endsection
@section('styles')

@endsection
@section("content")
    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });
        });
    </script>
    <div class="container col-sm-4">
        <div class="row">
            <div class="d-flex justify-content-center card">
                <div class="card-body">
                    <h1 class="text-center">Registrar Libro</h1>
                    <form id="c_form-h" method="post" action="{{url('libros')}}">
                        @csrf
                        <div class="d-lg-flex">
                            <label for="title" class="col-2">Libro</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Titulo del libro" value="{{old('descripcion')}}">
                                @error('descripcion')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-2 d-lg-flex">
                            <label for="anio" class="col-2">Año</label>
                            <div class="col-10">
                                <input type="text" class="form-control @error('anio')is-invalid @enderror" id="anio" name="anio" placeholder="Año del libro" value="{{old('anio')}}">
                                @error('anio')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                            <div class="my-2 d-lg-flex">
                                <label class="col-sm-3">Editorial</label>
                                    <div class="d-flex col-lg-9">
                                        <select checked="checked" class="form-control @error('id_editoriales')is-invalid @enderror" id="id_editoriales" name="id_editoriales" required="required" style=" text: 0px 0px 4px black;">
                                            <option selected="0"> Elegir editorial </option>
                                            @foreach ($editorial as $edit)
                                                <option value="{{$edit->id}}"> {{$edit->nombre_editorial}} </option>
                                            @endforeach
                                        </select>
                                        @error('id_editoriales')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                </div>
                                <a class="btn bi-plus" href="{{route('aggedit.create')}}"></a>
                            </div>
                        <div class="my-2 d-lg-flex">
                            <label class="col-2 d-flex">Categoria</label>
                            <div class="form-group col-9">
                                <div class="form-group">
                                    <select class="select2-multiple form-control" name="id_categoria[]" multiple="multiple" id="id_categoria">
                                        @foreach($categoria as $categori)
                                            <option value="{{$categori->id}}">{{$categori->tipo_categoria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <a class="btn bi-plus" href="{{route('aggcategoria.create')}}"></a>
                        </div>
                        <div class="my-2 d-flex">
                            <label class="col-2 d-flex">Autor</label>
                            <div class="form-group col-9">
                                <div class="form-group">
                                    <select class="select2-multiple form-control" name="id_autor[]" multiple="multiple" id="id_autor">
                                        @foreach($autores as $autor)
                                            <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <a class="btn bi-plus" href="{{route('autorRegistro.create')}}"></a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Continuar<br></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
