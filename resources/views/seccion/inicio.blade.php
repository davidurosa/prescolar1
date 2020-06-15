@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Seccion')])
@section('content')
    <div class="content">
     <div class="container-fluid">

      <div class="card ">
      <div class="card-header card-header-primary">
        <div class="card-icon">
          <i class="material-icons">policy</i>
        </div>
        <h3 class="card-title"> {{$profesor->nombre_maestro}} {{$profesor->apellido_maestro}}</h3>
          <h6 class="card-title">Maestr@ del {{$salon->nivel}} . Seccion {{$salon->seccion}} </h6>

        
      </div>
    </div>

       @include('mostrar.seccion')
     </div>      
    </div>
@endsection