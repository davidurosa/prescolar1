<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS Just for demo purpose, don't include it in your project -->
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
    @foreach ($estudiantes as $estudiante)
    <h1>{{$estudiante->nombre_estudiante}}  {{$estudiante->apellido_estudiante}}</h1>
        codigo: {{$estudiante->codigo_estudiante}} <br><br>  
        Sexo: {{$estudiante->sexo_estudiante}} <br><br>
        FN: {{$estudiante->fecha_nacimiento_estudiante}} <br><br>
        peso: {{$estudiante->peso}} <br><br>
        talla: {{$estudiante->talla}} <br><br>
        LDN: {{$estudiante->lugar_de_nacimiento}} <br><br>
         tar vac: {{$estudiante->targeta_de_vacunacion}} <br><br>
        Alergias: {{$estudiante->alergias}} <br><br>
        Tipo_sangre : {{$estudiante->tipo_sangre}} <br> <br>
        discapacidad : {{$estudiante->discapacidad}} <br><br>
        operaciones: {{$estudiante->operaciones}} <br><br>
      @endforeach
    
</body>
</html>



