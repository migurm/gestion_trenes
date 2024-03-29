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
    <button><a href="{{ route('ticket_types.create') }}">Nuevo tipo de ticket</a></button>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at dignissimos tenetur iusto quos accusantium veritatis aliquid iste odit est, expedita mollitia necessitatibus alias ipsa aperiam quia repellat. Error harum rem inventore possimus. Asperiores in consequatur delectus porro qui aperiam nobis modi magni enim quaerat sequi, animi repellendus nostrum accusantium!</p>
    <table>
        <thead>
            <tr>
                <th>Tipo de ticket</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ticket_types as $ticket_type)
            <tr>
                <td> {{ $ticket_type->type }} </td>
                <td>
                    <form method="GET" action="{{ route('ticket_types.show', ['ticket_type' => $ticket_type->id]) }}">
                        <input type="submit" value="ver">
                    </form>                    
                </td>
                <td>
                    <form method="GET" action="{{ route('ticket_types.edit', ['ticket_type' => $ticket_type->id]) }}">
                        <input type="submit" value="editar">
                    </form>                    
                </td>
                <td>
                    <form method="POST" action="{{ route('ticket_types.destroy', ['ticket_type' => $ticket_type->id]) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="eliminar">
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>