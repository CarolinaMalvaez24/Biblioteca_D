@extends('layouts.app')

@push('scripts')
<script type="text/javascript">
document.addEventListener('alpine:init', () => {
  Alpine.data('app', () => ({
		libros:{!!$libros!!},
		
    libro:null,
    copia:null,
    copias(){return getCopias(this.libro)},
		
  }))
});

const getLibros = () => {
  return {!!$libros!!};
}
const getCopias = (libro) => {
  return {!!$copias!!};
}




</script>

  
@endpush

@section("estantes")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b class="text-center">Generar Nuevo Prestamo</b></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-sm-12">
      <div class="row">
          <div class="d-flex justify-content-center card">
              <div class="card-body">
                  <form id="c_form-h" method="POST" action="{{url('prestamos')}}">
                    @csrf
                      <input type="hidden" name="users_id" value="{{auth()->user()->id}}">
                   

                      <div x-data="app" x-cloak>
                        <label>Libros:
                        <select x-model="libro">
                          <option value="">-- Select a State --</option>
                          <template x-for="libro in libros">
                            <option :value="libro.id"><span x-text="libro.titulo"></span></option>
                          </template>
                        </select>
                        </label>
                        
                        <label x-show="libro">Copia:
                          <select x-model="copia">
                            <template x-for="copia in copias">
                              <option x-show="copia.libros_id == libro" :value="copia.id"><span x-text="copia.num_copia"></span></option>
                            </template>
                          </select>
                        </label>
                      </div>
                       {{--
                    <div>
                      <select name="bar" x-model="bar" x-on:change="onBarChange">
                          <template x-for="(label, value) in barOptions">
                              <option x-bind:value="value">{{ label }}</option>
                          </template>
                      </select>
                    </div>
--}}


                   {{--    <div class="form-group">
                        <label>Seleccione un libro</label>
                        <select name="" class="form-control" id="select-libro">
                          <option value="">Seleccione libro</option>
                          @foreach($libros as $libro)
                            <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4">Seleccione una copia</label>
                        <select name="" class="form-control" id="select-copia">
                          <option value="">Seleccione copia</option>
                          @foreach($copias as $copia)
                            <option value="{{$copia->id}}">{{$copia->num_copia}}</option>
                          @endforeach
                          
                        </select>
                      </div> --}}
                      {{-- <div class="my-2 form-group row">
                        <label class="col-2">Selecciona la copia del libro</label>
                          <div class="col-10"><select class="form-select @error('ejemplares_id')is-invalid @enderror" aria-label="Default select example" id="ejemplares_id" name="ejemplares_id">
                                  <option selected="" value="Open this select menu">Selecciona copia</option>
                                  @foreach($copias as $copia)
                                      <option value="{{$copia->id}}">{{$copia->num_copia}}</option>
                                  @endforeach
                              </select>
                              @error('ejemplares.id')
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                          </div>
                      </div> --}}

                      <div class="text-center">
                      <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Agregar<br></button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection

