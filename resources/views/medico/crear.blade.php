@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Estudiante')])
@section('content')


    <div class="content">
     <div class="container-fluid">
      <div class="row">
      
      <div class="modal-content">
      <div class="card card-signup card-plain">
          <div class="modal-header text-center card-header-info">
              <h4 class="card-title">Register</h4>
              <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">
                <a href="/estudiantes"><i class="material-icons btn-letch">clear</i></a>
              </button>

              
           
            
          </div>
          <div class="modal-body ">
              <form action="/estudiantes/crear/reporte_medico" method="POST" >
                @csrf
                  <p class="description text-center">Registro Medico</p>
                  <div class="card-body">

                      
                    
                    <div class="row">
                    

                      <div class="form-group bmd-form-group col-md-3">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="material-icons">face</i></div>
                            </div>
                            
                            <input type="text" class="form-control" value="{{ old('codigo') }}" placeholder="Codigo"  required  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20" name="codigo" >
                          </div>
                          </div>



                           <div class="form-group bmd-form-group col-md-3">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="material-icons">face</i></div>
                                </div>
                                
                                <input type="text" class="form-control"value="{{ old('sangre') }}"placeholder="Tipo de sangre"  required name="sangre"  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20 " >
                              </div>
                              </div> 


                              

                                  <div class="form-group bmd-form-group col-md-3">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">face</i></div>
                                          </div>
                                          
                                          <input type="text" class="form-control"value="{{ old('alergia') }}"placeholder="Alergias"  required name="alergia"  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20 " >
                                        </div>
                                        </div> 

                                        <div class="form-group bmd-form-group col-md-3">
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class="material-icons">face</i></div>
                                            </div>
                                            
                                            <input type="text" class="form-control"value="{{ old('operaciones') }}"placeholder="Operaciones"  required name="operaciones"  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20 " >
                                          </div>
                                          </div> 

                                          <div class="form-group bmd-form-group col-md-3">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">face</i></div>
                                              </div>
                                              
                                              <input type="text" class="form-control"value="{{ old('discapacidad') }}"placeholder="Discapacidad"  required name="discapacidad"  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20 " >
                                            </div>
                                            </div> 



                                </div>

                                
                         <div class="row">
                                
                    </div>

                      

                      {{-- <div class="form-group bmd-form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="material-icons">dehaze</i></div>
                            </div>
                            
                            <select class=" custom-select"   required name="carrera_id" >
                                @foreach ($carreras->get() as $item =>$carreras)
                                <option  value="{{$item}}">
                                {{$carreras}}
                                </option>
                                    
                                @endforeach

                            </select>  -
                           </div>
                      </div> --}}

                      

                      
                  </div>


                  <div class="modal-footer justify-content-center">
                      <button type="submit" class="btn btn-info  btn-wd btn-lg" >Guardar</button>
                      <button type="reset" class="btn btn-danger btn-wd btn-lg">cancelar</button>

                    </div>
              </form>
          </div>
          
      </div>
  </div>



</div>
     </div>      
    </div>
@endsection