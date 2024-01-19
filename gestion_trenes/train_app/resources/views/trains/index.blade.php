<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trenes</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <h1>trenes</h1>
    <button><a href="{{ route('trains.create') }}">Crear tren</a></button>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at dignissimos tenetur iusto quos accusantium veritatis aliquid iste odit est, expedita mollitia necessitatibus alias ipsa aperiam quia repellat. Error harum rem inventore possimus. Asperiores in consequatur delectus porro qui aperiam nobis modi magni enim quaerat sequi, animi repellendus nostrum accusantium!</p>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tipo de tren</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td> {{ $train->name }} </td>
                <td> {{ $train->passengers }} </td>
                <td> {{ $train->year }} </td>
                <td> {{ $train->train_type->type }} </td> <!-- unbelievable -->
                <td>
                    <form method="GET" action="{{ route('trains.show', ['train' => $train->id]) }}">
                        <input type="submit" value="ver">
                    </form>
                </td>
                <td>
                    <form method="GET" action="{{ route('trains.edit', ['train' => $train->id]) }}">
                        <input type="submit" value="editar">
                    </form>
                </td>
                <td>Eliminar</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>