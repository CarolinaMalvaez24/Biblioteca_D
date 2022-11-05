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
          <form id="c_form-h" method="POST" action="{{route('libros.update',$libro->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Descripcion</label>
              <div class="col-10">
                <input type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion" name="descripcion" required="required" placeholder="Descripcion del libro" value="{{$libro->descripcion}}"> 
                @error('descripcion')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Año</label>
              <div class="col-10"><input type="number" class="form-control @error('anio')is-invalid @enderror" id="anio" name="anio" placeholder="Año del libro" value="{{$libro->anio}}">
                @error('anio')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Editorial</label>
              <div class="col-10"><select checked="checked" class="form-control @error('id_editoriales')is-invalid @enderror" id="id_editoriales" name="id_editoriales" required="required" style="	text: 0px 0px 4px black;">
                  <option selected=""> Elegir editorial </option>
                  @foreach($editorial as $editor) 
                    <option value="{{$editor->id}}" {{$editor->id== $libro->id_editoriales ? 'selected' : ''}}> {{$editor->nombre_editorial}} </option>
                  @endforeach
                </select>
                @error('id_editoriales')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row"><label class="col-2">Categoria</label>
              <div class="col-10"><select checked="checked" class="form-control @error('id_categorias')is-invalid @enderror" id="id_categorias" name="id_categorias" required="required" style="	text: 0px 0px 4px black;">
                  <option selected=""> Elegir categoria </option>
                  @foreach($categoria as $categoria)
                    <option value="{{$categoria->id}}" {{$categoria->id== $libro->id_categorias ? 'selected' : ''}}>{{$categoria->tipo_categoria}}</option>
                  @endforeach
                </select>
                @error('id_categorias')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar<br></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
