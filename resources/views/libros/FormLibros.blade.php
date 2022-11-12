@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Agregar Libro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <form id="c_form-h" method="post" action="{{url('libros')}}">
            @csrf
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Titulo</label>
              <div class="col-6">
                <input type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Titulo del libro" value="{{old('descripcion')}}">
                @error('descripcion')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
                 </div>
              </div>
            <div class="form-group row"><label class="col-2">Año</label>
              <div class="col-10"><input type="number" class="form-control @error('anio')is-invalid @enderror" id="anio" name="anio" placeholder="Año del libro" value="{{old('anio')}}">
                @error('anio')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-9">
                <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><select checked="checked" class="form-control @error('id_editoriales')is-invalid @enderror" id="id_editoriales" name="id_editoriales" required="required" style=" text: 0px 0px 4px black;">
                  <option selected=""> Elegir editorial </option>
                  @foreach ($editorial as $edit)
                      <option value="{{$edit->id}}"> {{$edit->nombre_editorial}} </option>
                  @endforeach
                </select>
                @error('id_editoriales')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
              </div>
              <div class="col-3"><a href="{{route('editoriales.create')}}" class="btn btn-primary">Nuevo</a></div>

            </div>
            <div class="form-group row"><label class="col-2">Categoria</label>
              <div class="col-10"><select checked="checked" class="form-control @error('id_categorias')is-invalid @enderror" id="id_categorias" name="id_categorias" required="required" style="  text: 0px 0px 4px black;">
                  <option selected=""> Elegir categoria </option>
                  @foreach($categoria as $categori)
                    <option value="{{$categori->id}}">{{$categori->tipo_categoria}}</option>
                  @endforeach
                </select>
                @error('id_categorias')
                  <div class="invalid-feedback">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar<br></button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>
  </div>
@endsection
