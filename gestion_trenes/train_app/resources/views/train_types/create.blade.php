<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear tipo</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/train_types') }}">Tipos de trenes</a></li>
    <form method="POST" action="{{ route('train_types.store') }}">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name">
        <input type="submit" value="create">
    </form>
    
</body>
</html>