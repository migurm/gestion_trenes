<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de trenes</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <h1>Tipos de trenes</h1>
    <button><a href="{{ route('train_types.create') }}">Crear tipo de tren</a></button>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at dignissimos tenetur iusto quos accusantium veritatis aliquid iste odit est, expedita mollitia necessitatibus alias ipsa aperiam quia repellat. Error harum rem inventore possimus. Asperiores in consequatur delectus porro qui aperiam nobis modi magni enim quaerat sequi, animi repellendus nostrum accusantium!</p>

    <table>
        <thead>
            <tr>
                <th>Tipo de tren</th>
            </tr>            
        </thead>
        <tbody>
            @foreach($train_types as $train_type)
            <tr>
                <td> {{ $train_type->type }} </td>
                <td>
                    <form method="GET" action="{{ route('train_types.show', ['train_type' => $train_type->id]) }}">
                        <input type="submit" value="ver">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        
    </table>
</body>
</html>