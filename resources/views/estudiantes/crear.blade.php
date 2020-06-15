@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Estudiante')])
@section('content')
@inject('transportes', 'App\Services\Transporte') 
@inject('encargadoss', 'App\Services\Encargadoss') 
@inject('secciones', 'App\Services\Secciones') 
@inject('papas', 'App\Services\Papas') 
@inject('mamas', 'App\Services\Mamas')
@inject('medicos', 'App\Services\Medicos')



 




    <div class="content">

      @if ($errors->any())

      @foreach ($errors->all() as $error)

     <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
         
     @endforeach
    
@endif

     <div class="container-fluid">
   

      <div class="row">




      <div class="col-md-12">

          <div class="card ">
            <form class="form-horizontal" action="/estudiantes/crear" method="POST" enctype="multipart/form-data" >
        @csrf 

        
                <div class="card-header card-header-warning">
                  <div class="card-icon">
                    <i class="material-icons">contacts</i>
                  </div>
                  <h3 class="card-title"> Registro</h3>
                    <h6 class="card-title"> Datos del Niño </h6>

                    <div class="form-group form-file-upload form-file-multiple col-md-3">
                      <div class="input-group">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-round btn-default">
                                <input type="file"  required class="inputFileHidden" name="foto" >

                                  <i class="material-icons">insert_photo</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  
                </div>
                <div class="card-body ">



                  <div class="row">
                    
                      <div class="col-md-3">
                        <div class="form-group  bmd-form-group">
                          <label class="bmd-label-floating">Cedula</label>
                          <input type="number" class="form-control" value="{{ old('cedula') }}" required pattern="[0-9]{6,11}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="cedula" >
                        </div>
                      </div>
                      
                      <br>
                      <br>
                      <br>

                       <div class="col-md-3">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" class="form-control" value="{{ old('nombre') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="nombre" >
                        </div>
                      </div>

                      <br>
                      <br>
                      <br>                      

                       <div class="col-md-3">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-floating">Apellido</label>
                          <input type="text" class="form-control" value="{{ old('apellido') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="apellido" >
                        </div>
                      </div>

                      <br>  
                      <br>
                      <br> 
                      
                       <div class="col-md-3">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-floating">Lugar de Nacimiento</label>
                          <input type="text" class="form-control" value="{{ old('lugar') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="lugar" >
                        </div>
                      </div>

                      <br>  
                      <br>
                      <br>                       

                      <div class="col-md-1">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-floating">Peso</label>
                          <input type="number" step="0,01" class="form-control" value="{{ old('peso') }}" required  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20" name="peso" >
                        </div> 
                      </div>                        

                      <br>
                      <br>
                      <br> 

                      <div class="col-md-1">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-floating">Talla</label>
                          <input type="number" step="1" class="form-control" value="{{ old('talla') }}" required  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20" name="talla" >
                        </div> 
                      </div>                        

                      <br>
                      <br>
                      <br>                       
                      
                      <div class="col-md-3">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-static"> <i class="material-icons">cake</i>Fecha de Nacimiento </label><br>
                          <input type="date" name="fecha" value="{{ old('fecha') }}" title="Fecha de nacimiento"  required  class="form-control" >                        
                        </div>
                      </div> 

                      <br>
                      <br>
                      <br>

                      <div class="col-md-2">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-static"> Género </label><br>
                            <select name="sexo" class="custom-select" value="{{ old('sexo') }}" required>

                              <option  value=""> Seleccione</option>

                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                           </select> 
                        </div>
                      </div> 


                      <div class="col-md-3">
                        <div class="form-group has-default bmd-form-group">
                          <label class="bmd-label-static"> Sección/Grado/Nivel </label><br>
                             <select class="custom-select "  required  name="id_seccion">                      

                              @foreach ($secciones->get() as $item =>$seccion)
                              <option value="{{$item}}">
                              {{$seccion}}
                              </option>
                              @endforeach

                           </select> 
                        </div>
                      </div> 

                      <br>
                      <br>
                      <br>                      


                      <div class="col-md-2">
                          <div class="form-check form-info">
                            <label class="form-check-label">
                                <input class="form-check-input" name="vacuna" required type="checkbox" value="1">
                                Tarjeta de Vacunación
                                <span class="form-check-sign">
                                    <span class="check" name="vacuna"></span>
                                </span>
                            </label>
                        </div>
                      </div>
                      
                      <br>
                      <br>
                      <br>                      
                      



        </div>

      


        <div class="row">
                        
          <div class="col-md-3">
            <div class="form-group has-default bmd-form-group">
              <label class="bmd-label-floating"><i class="material-icons">work</i> Direccion</label><br>
              <textarea type="text" class="form-control" value="{{ old('direccion_estudiante') }}" required pattern="[A-Za-z]{4,200}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="direccion_estudiante" ></textarea>
            </div> 
          </div>                
         

          
        </div>
        <br>
        <br>
        
             <!-- DATOS Medicos -->
      <div class="row">

      <div class="col-md-12">
            <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">healing</i>
                    </div>
                    <h6 class="card-title"> Datos Médicos </h6>

                    
                  </div> 
                  
                  


            </div>
        </div> 
          <div class="col-md-3">
            <div class="form-group has-default bmd-form-group">
              <label class="bmd-label-floating">tipo de sangre</label>
              <input type="text" class="form-control" value="{{ old('sangre') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="sangre" >
            </div>
          </div>
          <br>
          <br>
          <br>

          <div class="col-md-3">
            <div class="form-group has-default bmd-form-group">
              <label class="bmd-label-floating"><i class="material-icons">work</i>Discapacidad</label><br>
              <textarea type="text" class="form-control" value="{{ old('discapacidad') }}" required pattern="[A-Za-z]{4,200}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="discapacidad" ></textarea>
            </div> 
          </div>  
           <br>
          <br>
          <br>
          
          <div class="col-md-3">
            <div class="form-group has-default bmd-form-group">
              <label class="bmd-label-floating"><i class="material-icons">work</i> Operaciones</label><br>
              <textarea type="text" class="form-control" value="{{ old('operaciones') }}" required pattern="[A-Za-z]{4,200}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="operaciones" ></textarea>
            </div> 
          </div> 
          <br>
          <br>
          <br>


          <div class="col-md-3">
            <div class="form-group has-default bmd-form-group">
              <label class="bmd-label-floating"><i class="material-icons">work</i> Alergias</label><br>
              <textarea type="text" class="form-control" value="{{ old('alergia') }}" required pattern="[A-Za-z]{4,200}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="alergia" ></textarea>
            </div> 
          </div> 
          




        </div>        
    




             <!-- DATOS MAMA -->
      <div class="row">

      <div class="col-md-12">
        <h3 class="title"> Datos de Los Padres </h3>
        <br>

            <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">wc</i>
                    </div>
                    <h6 class="card-title"> Mamá </h6>

                    
                  </div> 
                  
                  


            </div>
        </div> 
                        <div class="col-md-6">
                        <div class="form-group has-default bmd-form-group">
                            <select class="custom-select "  required  name="id_mama">
                            

                              @foreach ($mamas->get() as $item =>$mama)
                              <option value="{{$item}}">
                              {{$mama}}
                              </option>
                              @endforeach
                              
                           </select> 
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                        <a class="btn btn-default" href=/estudiantes/crear/mama>
                            <i class="material-icons">add</i>
                          </a>                          
                        </div>

                      <br>
                      <br>
                      <br>          
      </div>  

             <!-- DATOS PAPA -->
      <div class="row">

      <div class="col-md-12">
            <div class="card ">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">wc</i>
                    </div>
                    <h6 class="card-title"> Papá </h6>

                    
                  </div> 
                  
                  


            </div>
        </div> 
                        <div class="col-md-6">
                        <div class="form-group has-default bmd-form-group">
                            <select class="custom-select "  required  name="id_papa">
                            

                              @foreach ($papas->get() as $item =>$papa)
                              <option value="{{$item}}">
                              {{$papa}}
                              </option>
                              @endforeach
                              
                           </select> 
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                        <a class="btn btn-default" href=/estudiantes/crear/papa>
                            <i class="material-icons">add</i>
                          </a>                          
                        </div>

                      <br>
                      <br>
                      <br>          
      </div> 
      <br>
      <br>

             <!-- DATOS Encargado -->
      <div class="row">
      <div class="col-md-12">
        <h3 class="title"> Transporte y Encargado </h3>
        <br>

            <div class="card ">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">policy</i>
                    </div>
                    <h6 class="card-title"> Encargado </h6>

                    
                  </div> 
                  
                  


            </div>
        </div> 
                        <div class="col-md-6">
                        <div class="form-group has-default bmd-form-group">
                            <select class="custom-select "  required  name="id_encargado">
                            

                              @foreach ($encargadoss->get() as $item =>$encargado)
                              <option value="{{$item}}">
                              {{$encargado}}
                              </option>
                              @endforeach
                              
                           </select> 
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                        <a class="btn btn-default" href=/estudiantes/crear/encargados>
                            <i class="material-icons">add</i>
                          </a>                          
                        </div>

                      <br>
                      <br>
                      <br>          
      </div>  


             <!-- DATOS Transporte -->
      <div class="row">
      <div class="col-md-12">
            <div class="card ">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">departure_board</i>
                    </div>
                    <h6 class="card-title"> Transporte </h6>

                    
                  </div> 
                  
                  


            </div>
        </div> 
                        <div class="col-md-6">
                        <div class="form-group has-default bmd-form-group">
                            <select class="custom-select "  required  name="id_transporte">
                            

                              @foreach ($transportes->get() as $item =>$transporte)
                              <option value="{{$item}}">
                              {{$transporte}}
                              </option>
                              @endforeach
                              
                           </select> 
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                        <a class="btn btn-default" href=/estudiantes/crear/transporte>
                            <i class="material-icons">add</i>
                          </a>                          
                        </div>

                      <br>
                      <br>
                      <br>          
          </div>       
        </div>

       
                  <div class="card-footer justify-content-center">
                  <div class="row ">

                    <div class="col-md-6">
                      <button type="reset" class="btn btn-fill btn-danger">Cancelar</button>
                    </div>

                    <div class="col-md-6">
                      <button type="submit" class="btn  btn-success">Registrar</button>
                    </div>

                  </div>
                </div>
              </form>
        
      </div>



      </div> 
 



  </div>
@endsection