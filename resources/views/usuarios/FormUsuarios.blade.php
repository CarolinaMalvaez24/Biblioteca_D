@extends('layouts.app')

@section("usuarios")
    active
@endsection
@section("content")
<div class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center"><b class="text-center">Agregar Usuario</b></h1>
    </div>
  </div>
</div>
</div>
<div class="py-5">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form id="c_form-h" method="POST" action="{{url('usuarios')}}">
        @csrf
        <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Nombre</label>
          <div class="col-10">
            <input type="text" class="form-control @error('nombre')is-invalid @enderror" id="nombre" name="nombre" placeholder="Nombre"> 
            @error('nombre')
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">Apellido Paterno<br></label>
          <div class="col-10">
            <input type="text" class="form-control @error('apellidoPaterno')is-invalid @enderror" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno"> 
            @error('apellidoPaterno')
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row"><label class="col-2">Apellido Materno</label>
          <div class="col-10"><input type="text" class="form-control @error('apellidoMaterno')is-invalid @enderror" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido Materno">
            @error('apellidoMaterno')
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row"><label class="col-2">Nombre de usuario<br></label>
          <div class="col-10"><input type="text" class="form-control @error('nombreUsuario')is-invalid @enderror" placeholder="username" id="nombreUsuario" name="nombreUsuario">
            @error('nombreUsuario')
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row"><label class="col-2">Correo</label>
          <div class="col-10"><input type="email" class="form-control @error('correo')is-invalid @enderror" id="correo" name="correo" placeholder="email">
          @error('correo')
                  <div class="invalid-feedback">{{$message}}</div>
          @enderror
          </div>
        </div>
        <div class="form-group row"><label class="col-2">Contraseña</label>
          <div class="col-10"><input type="password" class="form-control @error('contrasena')is-invalid @enderror" id="contrasena" name="contrasena" placeholder="Contraseña">
            @error('contrasena')
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row"><label class="col-2">Confirmar Contraseña</label>
          <div class="col-10"><input type="password" class="form-control" id="inputconfirmpassword" placeholder="Confirmar Contraseña"></div>
          </div>

          <div class="form-group row"><label class="col-2">Cargo</label>
          <div class="col-10"><select class="form-select @error('id_tipos')is-invalid @enderror" aria-label="Default select example" id="id_tipos" name="id_tipos">
            <option selected="" value="Open this select menu">Seleccionar cargo</option>
            @foreach($tipos as $tipo)
              <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
            @endforeach
          </select>
          @error('id_tipos')
                  <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>
        </div>
        </div>
          
        </div><button type="submit" class="btn btn-primary">Agregar<br></button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection


