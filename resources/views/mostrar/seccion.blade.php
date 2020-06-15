<div class="row">

    @foreach ($estudiantes as $estudiante)

      <div class="col-md-4">
          <div class="card " style="box-shadow : 5px 5px 25px  #cacaca;">
              <div class="card-header card-header-icon  card-header-danger" >
                <br>

                  <img style="height: 150px; width:150px;  border:solid 5px #00BCD4 " src="/imagenes/{{$estudiante->foto}}" class="card-img-top rounded-circle mx-auto d-block" alt="">
                
                  
                
                
              </div>
              <div class="card-body ">
                  <h4 class="card-title text-center">{{$estudiante->nombre_estudiante}} {{$estudiante->apellido_estudiante}}
                    </h4><p class="text-center">
                      
                      <a class="btn btn-primary" href="/estudiantes/{{$estudiante->id}}"> Ver Mas..</a>
                      <br>

                      <a class="btn btn-warning" href="/reporte_alumno/{{$estudiante->id}}">Reporte</a>
          </p>

           {{--  <form action="{{ route('eliminar',$estudiante->id)}}" method="POST">
           <a class="btn btn-success btn-just-icon btn-fill btn-round btn-wd" href="/equipate/{{$id}}/editar/{{$estudiante->id}}"><i class="material-icons">mode_edit</i></a>
             
            @csrf
              @method('DELETE')  
              
              <button type="submit" class="btn btn-danger btn-just-icon btn-fill btn-round"><i class="material-icons">error
              </i></button>
  
            </form> --}}
              </div>
          </div>
      </div>

     
    @endforeach
</div>