@extends('layouts.app')

@section("autores")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Autor</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
<<<<<<< HEAD
          
=======
          <form method="POST" action="{{route("autores.update",$autore->id)}}">
>>>>>>> d8700e633fb09446abc11fff3a7e5d6452cda980
            @csrf
            @method('PUT')
            <div class="form-group row"><label class="col-2">Nombre del Autor</label>
              <div class="col-10"><input type="text" class="form-control" id="inputAutor" placeholder="Nombre del autor del libro"></div>
            </div><button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
