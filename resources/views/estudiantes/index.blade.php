@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Estudiante')])
@section('content')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
      </div>

       <a class="btn btn-success btn-lg btn-block " href="/estudiantes/crear">Registrar</a>



       <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <a href="seccion/1">
          <div class="card">
            <img src="/material/img/Sin título-1-02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Primer Nivel</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        </a>
        <div class="col mb-4">
          <a href="seccion/2">
          <div class="card">
            <img src="/material/img/Sin título-1-01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Segundo Nivel</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        </a>
        <div class="col mb-4">
          <a href="seccion/3">
          <div class="card">
            <img src="/material/img/Sin título-1-03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tercer Nivel</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </a>
        
      </div>

       {{-- @include('mostrar.estudiante')  --}}


     </div>      
    </div>
@endsection