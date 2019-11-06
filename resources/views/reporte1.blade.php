<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "stylesheet" type="text/css" href= "css/estilo.css">
    <title>Document</title>
</head>
<body>
<div>
        <h2>Listado de Alcadias</h2>
        
    </div> 
<div class ="contenedor">
    
<table>
    <thead>
    <tr>
       <th style="color: red">id</th>
       <th>Proveedor</th>
       <th>descuento</th>
       <th>porcentaje</th>
       <th>fijo</th>
    </tr>
    </thead>
    <tbody>
    
    @php $a = $c ->id;
    $sw = 1;
    @endphp
    @foreach($dps as $dp)
        
        @if($a == $dp->id and $sw ==1)
        <tr>
            <td><b>{{ $dp -> id }}</b></td>
            <td><b>{{ $dp -> proveedor }}</b></td>
            <td></td><td></td><td></td>
        </tr>
            @php 
            $sw = 0;
            @endphp
        @else
        <tr> <td></td><td></td>
            <td>{{ $dp -> descuento }}</td>
            <td>{{ $dp -> porcentaje }}</td>
            <td>{{ $dp -> descuento_fijo }}</td>
        </tr>
        @endif
        @if($a != $dp->id)
            @php
            $a = $dp->id;
            $sw = 1;
            @endphp
        @endif
     @endforeach
    
    </tbody>
</table>
</div>    
    
</body>
</html>