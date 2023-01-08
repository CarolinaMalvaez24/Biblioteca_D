@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center mb-4">
        <div id="carouselExampleAutoplaying" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-item active">
                <div>
                    <img src="img/Bienvenido.gif" class="card-img" width="350" height="350" style="">
                </div>
              </div>
            <div class="carousel-inner">
                @foreach ($carrousel as $carrou)
                    <div class="carousel-item">
                        <article class="">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-lg-4 col-md-6 text-center">
                                <img src="{{Storage::url($carrou->image->url)}}" class="card-img" width="120" height="400" style="">
                                {{$carrou->titulo}}
                              </div> 
                            </div>
                          </div>
                        </article>  
                    </div>     
                @endforeach
            </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-dark rounded-3" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-dark rounded-3" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
        <div class="col-md-12">
            <div class="card border border-dark">
                <div class="card-header text-center text-white bg-dark">{{ __('Bienvenido') }}</div>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container text-center">
                        <div class="row row-cols-4">
                            @foreach ($libros as $libro)
                                <div class="col mb-4">
                                    <a class="" href="{{route('libros.show',$libro->id)}}">
                                        <div class="card text-bg-dark">
                                        <img src="{{Storage::url($libro->image->url)}}" class="card-img" width="100" height="350" style="">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title ">
                                            {{$libro->titulo}}
                                            </h5>
                                        </div>
                                      </div>
                                    </a>
                                    <div>
                                        <p class="card-text text-dark bg-secondary rounded-lg">{{$libro->descripcion}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-secondary p-4" >
    <div class="container">
      <div class="row">
        <div class="p-0 col-lg-4 col-md-6">
            <div class="col-12 col-md"> <i class="fa fa-lg fa-bullseye d-block mb-2"></i> <small class="d-block mb-3 text-dark">© 2022-2023</small> </div>
          <img class="img-fluid" src=""> </div>
        <div class="col-md-5 align-self-center p-4 offset-md-1">
          <h4>Equipo <br>Las chicas superpoderosas </h4>
          <div class="py-2">
            <div class="container">
              <div class="row" >
                <div class="py-2 col-md-6"><abbr title="">José Manuel Mercado Menchaca</abbr></div>
                <div class="col-md-6"><a class="ml-3 btn text-white" href="https://www.facebook.com/manu.uel9439/" style="background:#3b5998" target="" ><i class="bi-facebook ml-1"></i></a> <a class="ml-3 btn text-black" href="https://www.instagram.com/manu_uel09/" style="background:#ffff" target="" ><i class="bi-instagram ml-1"></i></a></div>
                <div class="py-2 col-md-6"><abbr title="">Efrén Bárcenas García</abbr></div>
                <div class="col-md-6"><a class="ml-3 btn text-white" href="https://www.facebook.com/efren.barcenas.12" style="background:#3b5998" target="" ><i class="bi-facebook ml-1"></i></a> <a class="ml-3 btn text-black" href="https://www.instagram.com/efren._.barcenas/" style="background:#ffff" target="" ><i class="bi-instagram ml-1"></i></a></div>
                <div class="py-2 col-md-6"><abbr title="">Julio Alejandro López Espinoza</abbr></div>
                <div class="col-md-6"><a class="ml-3 btn text-white" href="https://www.facebook.com/profile.php?id=100039165930641" style="background:#3b5998" target="" ><i class="bi-facebook ml-1"></i></a> <a class="ml-3 btn text-black" href="https://www.instagram.com/julio___________67/" style="background:#ffff" target="" ><i class="bi-instagram ml-1"></i></a></div>
                <div class="py-2 col-md-6"><abbr title="">Carolina Malvaes Hernandez</abbr></div>
                <div class="col-md-6"><a class="ml-3 btn text-white" href="https://www.facebook.com/carol.malvaez.9" style="background:#3b5998" target="" ><i class="bi-facebook ml-1"></i></a> <a class="ml-3 btn text-black" href="https://www.instagram.com/caro_malvaez24/" style="background:#ffff" target="" ><i class="bi-instagram ml-1"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
