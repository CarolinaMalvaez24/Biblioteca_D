@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div
            <div class="pt-5" style="">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
                    <div class="px-md-5 p-3 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2" style="">
                        <div class="row">
                            <div class="col-md-12" style="">
                            <h1 class="" style="">Titulo del libro</br>
                            <span class="badge badge-light"></span></h1>
                            {{$libro->titulo}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <h4 style="" class="">Año de publicacion</h4>
                                {{$libro->anio}}
                            </div>
                            <div class="col-2">
                                manis
                            </div>
                        </div>
                      <h3 class="mx-auto" style="">Heading 3 <span class="badge badge-light"> New</span></h3>
                      <p class="mb-3 lead" style="" >And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    
@endsection