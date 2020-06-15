 <!DOCTYPE html>
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
                <th>codigo</th>
                <th>nombre</th>
                <th>Apellido</th>
                <th>sexo</th>
                <th>Fecha Nacimiento</th>
                <th>Talla </th>
                <th>Peso</th>

            
            </tr>
        </thead>
        <tbody>

           @foreach ($estudiantes as $estudiante)
          <tr>
              <td>{{$estudiante->codigo_estudiante}}</td>
              <td >{{$estudiante->nombre_estudiante}}</td>
              <td>{{$estudiante->apellido_estudiante}}</td>
              <td>{{$estudiante->sexo_estudiante}}</td>
              <td>{{$estudiante->fecha_nacimiento_estudiante}}</td>
              <td>{{$estudiante->talla}}</td>
              <td>{{$estudiante->peso}}</td>

          </tr>
          @endforeach 
    </tbody> 
  </table>
</body>
</html> 
