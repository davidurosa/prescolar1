{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
<style>
.table{
    width: 100%;
    border: 1px solid #999999;
    border-collapse:collapse;
}
.table td{
    border: 1px solid #999999;
    padding: 15px;
}
.table th{
    background: #cacaca;
    border: 1px solid #999999;
    padding: 15px;
}

</style>

</head>
<body>
    <h1>Partidos diputados</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Equipo Contrario</th>
                <th>Fecha</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>

          {{-- @foreach ($partidos as $partido)
          <tr>
              <td >{{$partido->nombre_equipo}}</td>
              <td>{{$partido->equipo_contrario}}</td>
              <td>{{$partido->fecha}}</td>
              <td>{{$partido->resultado}}</td>
                  </button>
              </td>
             
          </tr>
          @endforeach 
    </tbody> 
  </table>
</body>
</html> --}}


@extends('layouts.app', ['activePage' => 'reportes', 'titlePage' => __('Reportes')])
@section('content')
<div class="content">
    <div class="container-fluid">
       

        <a class="btn btn-success btn-lg btn-block " href="{{route('nivel1')}}">Reporte deL primer Nivel</a>
        <a class="btn btn-warning btn-lg btn-block " href="{{route('nivel2')}}">Reporte deL Segundo Nivel</a>
        <a class="btn btn-info btn-lg btn-block " href=" {{route('nivel3')}}">Reporte deL Tercer nivel</a>
        <a class="btn btn-primary btn-lg btn-block " href="">Reporte de Personal</a>
        <a class="btn btn-danger btn-lg btn-block " href="">Reporte de Todos los estudiante</a>



</div>
</div>
@endsection
