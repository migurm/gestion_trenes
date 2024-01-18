<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear tipo de ticket</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/ticket_types') }}">Tipos de tickets</a></li>
    <form method="POST" action="{{ route('ticket_types.store') }}">
        @csrf
        <label for="type">Tipo:</label>
        <input type="text" name="type">
        <input type="submit" value="create">
    </form>
    
</body>
</html>