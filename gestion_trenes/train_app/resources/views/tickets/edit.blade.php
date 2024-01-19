<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar ticket del: {{ $ticket -> date}}</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/tickets') }}">Tickets</a></li>
    <form method="POST" action="{{ route('tickets.update', ['ticket'=>$ticket->id]) }}">
        @csrf
        {{ method_field('PUT') }}
        <label for="date">Fecha</label>
        <input type="date" name="date" value="{{$ticket->date}}">
        <label for="price">Precio:</label>
        <input type="number" name="price" step="0.1" value="{{$ticket->price}}">

        <select name="train_id">
            <option value="{{$ticket->train_id}}" selected>{{$ticket->train->name}}</option>

           @foreach($trains as $train)
                @if ($train->id !== $ticket->train_id)
                    <option value="{{ $train->id }}">{{ $train->name }}</option>
                @endif
            @endforeach 
    
        </select>

        <select name="ticket_type_id">
            <option value="{{$ticket->ticket_type_id}}" selected>{{ $ticket->ticket_type->type }}</option>

            @foreach($ticket_types as $ticket_type)
                @if ($ticket_type->id !== $ticket->ticket_type_id)
                    <option value="{{ $ticket_type->id }}">{{ $ticket_type->type }}</option>
                @endif
            @endforeach

        </select>
        <input type="submit" value="modificar">
    </form>
    
</body>
</html>