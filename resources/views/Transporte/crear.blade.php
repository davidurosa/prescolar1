@extends('layouts.app', ['activePage' => 'estudiantes', 'titlePage' => __('Estudiante')])
@section('content')


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
         <form class="form-horizontal" action="/estudiantes/crear/transporte" method="POST" enctype="multipart/form-data" >
     @csrf 

     
             <div class="card-header card-header-warning">
               <div class="card-icon">
                 <i class="material-icons">policy</i>
               </div>
               <h3 class="card-title"> Registro</h3>
                 <h6 class="card-title"> Datos del transporte </h6>

               
             </div>
             <div class="card-body justify-content-center">

               <div class="row">
                 
                   <div class="col-md-3">
                     <div class="form-group has-rose bmd-form-group">
                       <label class="bmd-label-floating"><i class="material-icons">assignment_ind</i> Cedula</label> <br>
                       <input type="number" class="form-control" value="{{ old('cedula') }}" required pattern="[0-9]{6,11}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="cedula" >
                     </div>
                   </div>
                   
                   <br>
                   <br>
                   <br>

                    <div class="col-md-3">
                     <div class="form-group has-default bmd-form-group">
                       <label class="bmd-label-floating"><i class="material-icons">person</i> Nombre</label><br>
                       <input type="text" class="form-control" value="{{ old('nombre') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="nombre" >
                     </div>
                   </div>

                   <br>
                   <br>
                   <br>                      

                    <div class="col-md-3">
                     <div class="form-group has-default bmd-form-group">
                       <label class="bmd-label-floating"><i class="material-icons">person</i> Apellido</label><br>
                       <input type="text" class="form-control" value="{{ old('apellido') }}" required pattern="[A-Za-z]{4,20}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="apellido" >
                     </div>
                   </div>

                   <br>  
                   <br>
                   <br> 
             

                   <br>  
                   <br>
                   <br>                       

                   <div class="col-md-3">
                     <div class="form-group has-default bmd-form-group">
                       <label class="bmd-label-floating"><i class="material-icons">call</i> Teléfono</label><br>
                       <input type="number"  class="form-control" value="{{ old('telefono') }}" required  title=" solo Letras . Tamaño mínimo: 3. Tamaño máximo: 20" name="telefono" >
                     </div> 
                   </div>                        

                   <br>
                   <br>
                   <br>
                   <div class="col-md-3">
                    <div class="form-group has-default bmd-form-group">
                      <label class="bmd-label-floating"><i class="material-icons">work</i> Direccion</label><br>
                      <textarea type="text" class="form-control" value="{{ old('direccion_transporte') }}" required pattern="[A-Za-z]{4,200}" title="SÓLO SE ADMITEN LETRAS. Tamaño mínimo: 4, Tamaño máximo: 20" name="direccion_transporte" ></textarea>
                    </div> 
                  </div> 
                  <br>
                   <br>
                   <br>

                                          

                   




     
   </div>
                 </form>
               <div class="card-footer justify-content-center">

                   
                      <div class="col-md-6">

                        <button type="submit" class="btn btn-success">Guardar y regresar</button>
                      </div>
                     <div class="col-md-6">
                        
                       <button type="reset" class="btn btn-link"><a class="btn btn-danger" href=/estudiantes>Cancelar y Salir</a></button>
                    </div>

                 
               </div>
   </div> 
   </div>
  </div>




</div>
@endsection