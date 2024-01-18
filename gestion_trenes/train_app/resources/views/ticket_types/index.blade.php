<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Tickets</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <h1>Tipos de Tickets</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at dignissimos tenetur iusto quos accusantium veritatis aliquid iste odit est, expedita mollitia necessitatibus alias ipsa aperiam quia repellat. Error harum rem inventore possimus. Asperiores in consequatur delectus porro qui aperiam nobis modi magni enim quaerat sequi, animi repellendus nostrum accusantium!</p>

    <ul>
        @foreach($ticket_types as $ticket_type)
            <li> {{ $ticket_type->type }} </li>
        @endforeach
    </ul>
</body>
</html>