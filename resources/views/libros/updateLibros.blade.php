@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Libro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form id="c_form-h" method="POST" action="{{route('libros.update',$libro->id)}}">
                @csrf
                @method('put')
                <div class="d-lg-flex">
                    <label for="title" class="col-2">Titulo</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Titulo del libro" value="{{$libro->descripcion}}">
                        @error('descripcion')
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
                    <div class="my-2 d-lg-flex">
                        <label class="col-2">Editorial</label>
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
                        <a class="btn bi-plus" href="{{route('editoriales.create')}}"></a>
                    </div>
                <div class="my-2 d-lg-flex">
                    <label class="col-2">Categoria</label>
                    <div class="d-flex col-lg-9">
                        <select checked="checked" class="form-control @error('id_categorias')is-invalid @enderror" id="id_categorias" name="id_categorias" required="required" style="  text: 0px 0px 4px black;">
                            <option selected="0"> Elegir categoria </option>
                            @foreach($categoria as $categori)
                                <option value="{{$categori->id}}" {{$categori->id== $libro->id_categorias ? 'selected' : ''}}>{{$categori->tipo_categoria}}</option>
                            @endforeach
                        </select>
                        @error('id_categorias')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <a class="btn bi-plus" href="{{route('categorias.create')}}"></a>
                </div>
                <div class="my-2 d-lg-flex">
                    <label class="col-2">Autor</label>
                    <div class="d-flex col-lg-9">
                        <select checked="checked" class="form-control @error('id_autor')is-invalid @enderror" id="id_autor" name="id_autor" required="required" style="  text: 0px 0px 4px black;">
                            <option selected="0"> Elegir Autor </option>
                            @foreach($autores as $autor)
                                <option value="{{$autor->id}}" {{$autor->id== $libro->id_autor ? 'selected' : ''}}>{{$autor->nombre_autor}}</option>
                            @endforeach
                        </select>
                        @error('id_autor')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <a class="btn bi-plus" href="{{route('autores.create')}}"></a>
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
  </div>
@endsection
