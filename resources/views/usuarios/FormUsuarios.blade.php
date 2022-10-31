@extends('layouts.app')

@section('content')
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
      <form id="c_form-h" class="">
        <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Nombre</label>
          <div class="col-10">
            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" required="required"> </div>
        </div>
        <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">Apellido Paterno<br></label>
          <div class="col-10">
            <input type="text" class="form-control" id="inputApPaterno" placeholder="Apellido"> </div>
        </div>
        <div class="form-group row"><label class="col-2">Apellido Materno</label>
          <div class="col-10"><input type="text" class="form-control" id="inputApMaterno" placeholder="Apellido"></div>
        </div>
        <div class="form-group row"><label class="col-2">Nombre de usuario<br></label>
          <div class="col-10"><input type="text" class="form-control" placeholder="username" id="inputusername"></div>
        </div>
        <div class="form-group row"><label class="col-2">Correo</label>
          <div class="col-10"><input type="email" class="form-control" id="inputemail" placeholder="email"></div>
        </div>
        <div class="form-group row"><label class="col-2">Contraseña</label>
          <div class="col-10"><input type="password" class="form-control" id="inputpassword" placeholder="Contraseña"></div>
        </div>
        <div class="form-group row"><label class="col-2">Confirmar Contraseña</label>
          <div class="col-10"><input type="password" class="form-control" id="inputconfirmpassword" placeholder="Confirmar Contraseña"></div>
        </div><button type="submit" class="btn btn-primary">Agregar<br></button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
