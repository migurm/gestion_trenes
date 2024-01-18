<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$ticket->ticket_type->type}}</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/tickets') }}">Tickets</a></li>

    <h2> {{ $ticket->date }}</h2>
    <h2> {{ $ticket->price }} </h2>
    <h2> {{ $ticket->train->name }} </h2>
    <h2> {{ $ticket->ticket_type->type }} </h2>

</body>
</html>