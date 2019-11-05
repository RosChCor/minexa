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
        <h2>Listado de Proveedores</h2>
        
    </div> 
<div class ="contenedor">
    
<table>
    <thead>
    <tr>
       <th style="color: red">id</th>
       <th>Proveedor</th>
       <th>Responsable</th>
       <th>Datos</th>
    </tr>
    </thead>
    <tbody>
    @foreach($proveedores as $proveedor)
        <tr>
            <td>{{ $proveedor -> id }}</td>
            <td>{{ $proveedor -> proveedor }}</td>
            <td>{{ $proveedor -> responsable }}</td>
            <td>{{ $proveedor -> direccion }} <br>
                {{ $proveedor -> telefono }} <br>
                {{ $proveedor -> email }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>    
    
</body>
</html>