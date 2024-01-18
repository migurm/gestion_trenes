<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido a la aplicación de trenes!</title>
</head>
<body>
    <h1>Hola, amigos de los trenes!</h1>
    <ul>
        <li><a href="{{ route('trains.index') }}">Trenes</a></li>
        <li><a href="{{ route('train_types.index') }}">Tipos de trenes</a></li>
        <li><a href="{{ route('tickets.index') }}">Tickets</a></li>
        <li><a href="{{ route('ticket_types.index') }}">Tipos de tickets</a></li>
    </ul>
</body>


</html>