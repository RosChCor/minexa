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
    {{ $c }}
    @php $a = $c ->id;
    $sw = 1;
    @endphp
    @foreach($dps as $dp)
        
        @if($c->id != $dp->id)
        <tr>
            <td>{{ $dp -> id }}</td>
            <td>{{ $dp -> proveedor }}</td>
        </tr>
        @else
        <tr> <td></td><td></td>   
            <td>{{ $dp -> descuento }}</td>
            <td>{{ $dp -> porcentaje }}</td>
            <td>{{ $dp -> descuento_fijo }}</td>
        </tr>
        @endif
     @endforeach
    
    </tbody>
</table>
</div>    
    
</body>
</html>