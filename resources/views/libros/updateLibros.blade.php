@extends('layouts.app')

@section("libros")
    active
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
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Libro</b></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-sm-4">
      <div class="row">
          <div class="d-flex justify-content-center card">
              <div class="card-body">
                  <form id="c_form-h" method="POST" action="{{route('libros.update',$libro->id)}}">
                      @csrf
                      @method('put')
                      <div class="d-lg-flex">
                            <label for="title" class="col-2">Titulo Libro</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo" name="titulo" placeholder="Titulo del libro" value="{{$libro->titulo}}">
                                @error('titulo')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-2 d-lg-flex">
                            <label for="anio" class="col-2">Año</label>
                            <div class="col-10">
                                <input type="text" class="form-control @error('anio')is-invalid @enderror" id="anio" name="anio" placeholder="Año del libro" value="{{$libro->anio}}">
                                @error('anio')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-lg-flex">
                            <label for="title" class="col-2">Descripcion Libro</label>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Descripcion del libro" value="{{old('descripcion')}}"></textarea>
                                @error('descripcion')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                            <div class="my-2 d-lg-flex">
                                <label class="col-sm-2">Editorial</label>
                                    <div class="d-flex col-lg-9">
                                        <select checked="checked" class="form-control @error('id_editoriales')is-invalid @enderror" id="id_editoriales" name="id_editoriales" required="required" style=" text: 0px 0px 4px black;">
                                            <option selected="0"> Elegir editorial </option>
                                            @foreach ($editorial as $edit)
                                                <option value="{{$edit->id}}" {{$edit->id== $libro->id_editoriales ? 'selected' : ''}}> {{$edit->nombre_editorial}} </option>
                                            @endforeach
                                        </select>
                                        @error('id_editoriales')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                </div>
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
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Guardar<br></button>
                        </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
