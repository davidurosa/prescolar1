@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Estudiante')])
@section('content')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
      </div>

      

       @include('mostrar.detallado') 
     </div>      
    </div>
@endsection