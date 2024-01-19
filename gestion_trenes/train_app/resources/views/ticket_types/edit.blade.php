<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar {{ $ticket_type -> type}}</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/ticket_types') }}">Tipos de Tickets</a></li>
    <form method="POST" action="{{ route('ticket_types.update', ['ticket_type'=>$ticket_type->id]) }}">
        @csrf
        {{ method_field('PUT') }}
        <label for="type">Tipo:</label>
        <input type="text" name="type" value="{{$ticket_type->type}}">
        <input type="submit" value="modificar">
    </form>
    
</body>
</html>