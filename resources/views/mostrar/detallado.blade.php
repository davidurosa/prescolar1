<div class="row">
    @foreach ($estudiantes as $estudiante)

    <div class="col-md-12">
          <div class="card">
              <div class="card-header card-header-icon card-header-info">
                  <div class="card-icon rounded-circle mx-auto d-block" style="box-shadow:5px 5px 5px #027D8D;">

                      <img style="height: 150px; width:150px;  border:solid 5px #fff " src="/imagenes/{{$estudiante->foto}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
                  </div>

                
              </div>
              <div class="card-body">
                  <div class="row">

                    <div class="col-md-4">  <h2 class="card-title text-info text-left">Papá:</h2>
                       <p class="text-left"> Cedula : {{$estudiante->cedula_papa}} <br>
                        Nombre: {{$estudiante->nombre_papa}} <br>
                        Apellido: {{$estudiante->apellido_papa}} <br>
                        FN: {{$estudiante->FN_papa}} <br>
                        Telefono: {{$estudiante->telefono_papa}} <br>
                         Trabajo: {{ $estudiante->trabajo_de_papa }}</p>
                        </div>
                        

                        <div class="col-md-4"> 

                            <h2 class="card-title text-info text-center">Estudiante:</h2>
                          <p class="text-center">

                                <b> Nombre:</b> {{$estudiante->nombre_estudiante}} <br>
                              Apellido: {{$estudiante->apellido_estudiante}} <br>
                              Codigo: {{$estudiante->codigo_estudiante}} <br>
                                  FN: {{$estudiante->fecha_nacimiento_estudiante}} <br>
                          Lugar de N: {{$estudiante->lugar_de_nacimiento}} <br> 
                          Peso: {{$estudiante->peso}} <br> 
                          Talla: {{$estudiante->talla}}  <br>
                          Targeta de vacunacion: {{$estudiante->targeta_de_vacunacion}}
                          </p>
                          
                        </div>
                        <div class="col-md-4">



                         

                          
                            <h2 class="card-title text-info text-right">Mamá:</h2>
                          <p class="text-right">

                              Cedula : {{$estudiante->cedula_mama}} <br>
                            Nombre: {{$estudiante->nombre_mama}} <br>
                            Apellido: {{$estudiante->apellido_mama}} <br>
                            FN: {{$estudiante->FN_mama}} <br>
                            Telefono: {{$estudiante->telefono_mama}} <br>
                            Trabajo: {{ $estudiante->trabajo_de_mama }}
                          </p>
                        </div>

                  </div>
                 

              
                  <hr>

               <div class="row">
                   <div class="col-md-4">
                    <h2 class="card-title text-info  text-left">Encargado:</h2>
               
                    <p class="text-left">
                        Cedula : {{$estudiante->cedula_encargado}} <br>
                Nombre: {{$estudiante->nombre_encargado}} <br>
                Apellido: {{$estudiante->apelldio_encargado}} <br>
                Parentesco: {{$estudiante->parentesco}} <br>
                Telefono: {{$estudiante->telefono_encargado}}
  
                    </p>
                

                   </div>
                   <div class="col-md-4">
                       <h2 class="card-title text-info  text-center" >Transporte:</h2>
                        <p class="text-center">
                        Cedula : {{$estudiante->cedula_transporte}} <br>
                        Nombre: {{$estudiante->nombre_transporte}} <br>
                        Apellido: {{$estudiante->apellido_transporte}} <br>
                       
                        Telefono: {{$estudiante->telefono_transporte}}
                           </div>

                    </p>
                   
                    <div class="col-md-4">
                      <h2 class="card-title text-info text-right" >seccion:</h2>                
                      <p class="text-right">
                         
                        seccion: {{$estudiante->seccion}} <br>
                          nivel: {{$estudiante->nivel}} <br>
                        </div>

                   <div class="col-md-12">
                       <h2 class="card-title text-info " >Reporte Medico:</h2>
                           <p class="">
                tipo de Sangre : {{$estudiante->tipo_sangre}} <br>
                Alergias: {{$estudiante->alergias}} <br>
                Discapacidad: {{$estudiante->discapacidad}} <br>
                Operaciones: {{$estudiante->operaciones}} <br>
                       </p>
                    

                   </div>
             
            
            </div>     
              
                
                <hr>
           

                
              </div>

            

           {{--  <form action="{{ route('eliminar',$estudiante->id)}}" method="POST">
           <a class="btn btn-success btn-just-icon btn-fill btn-round btn-wd" href="/equipate/{{$id}}/editar/{{$estudiante->id}}"><i class="material-icons">mode_edit</i></a>
             
            @csrf
              @method('DELETE')  
              
              <button type="submit" class="btn btn-danger btn-just-icon btn-fill btn-round"><i class="material-icons">error
              </i></button>
  
            </form> --}}
              </div>
          </div>
      

     
    @endforeach
</div>