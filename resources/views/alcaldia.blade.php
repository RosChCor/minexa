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
       <th>Codigo</th>
       <th>Alcaldia</th>
       <th>Estado</th>
    </tr>
    </thead>
    <tbody>
    @foreach($alcaldias as $alcaldia)
        <tr>
            <td>{{ $alcaldia -> id }}</td>
            <td>{{ $alcaldia -> codigo }}</td>
            <td>{{ $alcaldia -> alcaldia }}</td>
            <td>{{ $alcaldia -> estado }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>    
    
</body>
</html>