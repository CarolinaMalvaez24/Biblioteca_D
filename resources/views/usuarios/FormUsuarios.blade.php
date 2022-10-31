<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar8" style="">
        <p class="navbar-brand text-primary mb-0">
          <i class="fa d-inline fa-lg fa-stop-circle"></i> BRAND </p>
      </button>
      <div class="collapse navbar-collapse" id="navbar8">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Mi cuenta</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Editoriales<br></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Categorias<br></a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-github fa-fw fa-lg"></i>
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-gitlab fa-fw fa-lg"></i>
            </a> </li>
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <i class="fa fa-bitbucket fa-fw fa-lg"></i>
            </a> </li>
        </ul>
        <a class="btn btn-default navbar-btn"><i class="fa fa-user fa-fw"></i>Sign in</a>
      </div>
    </div>
  </nav>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>