@extends('layouts.app', ['activePage' => 'personal', 'titlePage' => __('Personal')])

@section('content')
<div class="content">
<div class="container-fluid">
<div class="row">
    
@foreach ($empleados as $empleado)

  <div class="col-md-4">
      <div class="card " style="box-shadow : 5px 5px 25px  #cacaca;">
          <div class="card-header card-header-icon  card-header-danger" >
            <br>
               <div class="text-info"></div> 
            
          </div>
          <div class="card-body ">
              <h4 class="card-title text-center text-info">{{$empleado->cargo_empleado}}
                </h4><p class="text-center">
                 Nombre: {{$empleado->nombre_empleado}} <br>
                 Apellido: {{$empleado->apellido_empleado}} <br>
                 cedula : {{$empleado->cedula}} <br>
                      FN: {{$empleado->fn_empleado}} <br>
                telefono: {{$empleado->telefono_empleado}}      
                  
      </p>
          </div>
      </div>
  </div>

  


 
@endforeach




@foreach ($maestros as $maestro)

  <div class="col-md-4">
      <div class="card " style="box-shadow : 5px 5px 25px  #cacaca;">
          <div class="card-header card-header-icon  card-header-danger" >
            <br>
               <div class="text-info"></div> 
            
          </div>
          <div class="card-body ">
              <h4 class="card-title text-center text-info">{{$maestro->cargo}}
                </h4><p class="text-center">
                 Nombre: {{$maestro->nombre_maestro}} <br>
                 Apellido: {{$maestro->apellido_maestro}} <br>
                 cedula : {{$maestro->cedula_maestro}} <br>
                      FN: {{$maestro->fecha_naciento_maestro}} <br>
                telefono: {{$maestro->telefono_maestro}}      
                  
      </p>
          </div>
      </div>
  </div>

  


 
@endforeach
</div>
</div>
</div>
@endsection