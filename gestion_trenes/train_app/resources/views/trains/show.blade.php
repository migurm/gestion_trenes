<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$train->name}}</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/trains') }}">Trenes</a></li>

    <h2> {{ $train->name }}</h2>
    <h2> {{ $train->passengers }} </h2>
    <h2> {{ $train->year }} </h2>
    <h2> {{ $train->train_type->type }} </h2>
</body>
</html>