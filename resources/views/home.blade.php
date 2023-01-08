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
                        <article 
                            class=""
                            {{-- style="background-image: url({{Storage::($carrou->image->url)}})" --}}>
                            <div>
                                <img src="{{Storage::url($carrou->image->url)}}" class="card-img" width="350" height="350" style="">
                            </div>
                            

                        </article>
                    {{--                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg> --}}
                                  
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
                                    <div class="card text-bg-dark">
                                        <img src="{{Storage::url($libro->image->url)}}" class="card-img" width="100" height="350" style="">
                                        <div class="card-img-overlay">
                                          <h5 class="card-title ">
                                            <a class="btn btn-dark text-capitalize border border-light rounded-lg active text-decoration-none py-1" href="{{route('libros.show',$libro->id)}}"
                                                                     data-toggle="tooltip" rel="tooltip" data-placement="top" title="{{$libro->titulo}}">
                                                                      <i class="bi bi-book">
                                                                        {{$libro->titulo}}
                                                                      </i>

                                                                  </a>
                                            {{-- {{$libro->titulo}} --}}</h5>
                                          <p class="card-text text-dark bg-secondary rounded-lg">{{$libro->descripcion}}</p>
                                        </div>
                                      </div>
                                    {{-- <div class="card text-bg-dark">
                                        <div class="card-body">
                                            <h1>{{$libro->titulo}}</h1>
                                        </div>
                                    </div> --}}
                                </div>
                            @endforeach
                        </div>
                      </div>
                        {{-- <img src="{{url("img/logo_transparent.png")}}" height="300" width="400"> --}}
                        {{-- <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"  width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                              </div>
                              <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
                              </div>
                              <div class="carousel-item active">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div> --}}


                          {{-- INICIO DE HOME --}}
                          
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
