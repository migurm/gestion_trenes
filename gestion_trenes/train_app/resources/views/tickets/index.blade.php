<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <h1>Tickets</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at dignissimos tenetur iusto quos accusantium veritatis aliquid iste odit est, expedita mollitia necessitatibus alias ipsa aperiam quia repellat. Error harum rem inventore possimus. Asperiores in consequatur delectus porro qui aperiam nobis modi magni enim quaerat sequi, animi repellendus nostrum accusantium!</p>

    <ul>
        @foreach($tickets as $ticket)
            <li> {{ $ticket->date }} </li>
        @endforeach
    </ul>
    <table>
        <thead>
            <tr>
                <th>Fecha del ticket</th>
                <th>Precio</th>
                <th>Tren</th>
                <th>Ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td> {{ $ticket->date }} </td>
                <td> {{ $ticket->price }} </td>
                <td> {{ $ticket->train->name }} </td>
                <td> {{ $ticket->ticket_type->type }} </td>
                <td>
                    <form method="GET" action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}">
                        <input type="submit" value="ver">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>