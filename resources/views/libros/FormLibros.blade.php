@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Libro</b></h1>
        </div>
      </div>
    </div>
  </div>
    <div class="container col-sm-4">
        <div class="row">
            <div class="d-flex justify-content-center card">
                <div class="card-body">
                    <form id="c_form-h" method="post" action="{{url('libros')}}">
                        @csrf
                        <div class="d-lg-flex">
                            <label for="title" class="col-2">Titulo</label>
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
                                <label class="col-2">Editorial</label>
                                    <div class="d-flex col-lg-9">
                                        <select checked="checked" class="form-control @error('id_editoriales')is-invalid @enderror" id="id_editoriales" name="id_editoriales" required="required" style=" text: 0px 0px 4px black;">
                                            <option selected=""> Elegir editorial </option>
<<<<<<< HEAD
                                            @foreach ($editorialss as $edit)
                                                <option value="{{$[edit->id}}"> {{$edit->nombre_editorial}} </option>
=======
                                            @foreach ($aggedit as $edit)
                                                <option value="{{$edit->id}}"> {{$edit->nombre_editorial}} </option>
>>>>>>> 9ef448ecdcfc4ff953d03d2523428eab7384b2a6
                                            @endforeach
                                        </select>
                                        @error('id_editoriales')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                </div>
                                <a class="btn bi-plus" href="{{route('aggedit.create')}}"></a>
                            </div>
                        <div class="my-2 d-lg-flex">
                            <label class="col-2">Categoria</label>
                            <div class="d-flex col-lg-9">
                                <select checked="checked" class="form-control @error('id_categorias')is-invalid @enderror" id="id_categorias" name="id_categorias" required="required" style="  text: 0px 0px 4px black;">
                                    <option selected=""> Elegir categoria </option>
                                    @foreach($categoria as $categori)
                                        <option value="{{$categori->id}}">{{$categori->tipo_categoria}}</option>
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
                                <select checked="checked" class="form-control @error('id_autor')is-invalid @enderror" id="id_autor" name="id_categorias" required="required" style="  text: 0px 0px 4px black;">
                                    <option selected="0"> Elegir Autor </option>
                                    @foreach($autores as $autor)
                                        <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>
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
@endsection
