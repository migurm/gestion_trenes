<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo ticket</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/tickets') }}">Tickets</a></li>
    <form method="POST" action="{{ route('tickets.store') }}">
        @csrf
        <label for="date">Fecha:</label>
        <input type="date" name="date">
        <label for="price">Precio:</label>
        <input type="number" name="price" step="0.1">
        <select name="train_id">
            <option value="" disabled selected>Nombre del tren:</option>
            @foreach($trains as $train)
            <option value="{{ $train->id }}">{{ $train->name }}</option>
            @endforeach
        </select>
        <select name="ticket_type_id">
            <option value="" disabled selected>Tipo de ticket:</option>
            @foreach($ticket_types as $ticket_type)
            <option value="{{ $ticket_type->id }}">{{ $ticket_type->type }}</option>
            @endforeach
        </select>

        <input type="submit" value="create">
    </form>
    
</body>
</html>