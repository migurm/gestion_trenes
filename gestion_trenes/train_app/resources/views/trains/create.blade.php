<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear tren</title>
</head>
<body> 
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/trains') }}">Trenes</a></li>
    <h1>A crear un nuevo tren</h1>
    <form method="POST" action="{{ route('trains.store') }}">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name">
        <label for="passengers">Pasajeros:</label>
        <input type="number" step="1" name="passengers">
        <label for="year">Año:</label>
        <input type="number" min="1910" max="2030" step="1" name="year">
        <label for="type">Tipo:</label>
        <select name="type">
            <option value="" disabled selected>Elija un tipo</option>
            @foreach($train_types as $train_type)
            <option value="{{ $train_type->id }}">{{ $train_type->type }}</option>
            @endforeach
        </select>
        <input type="submit" value="create">
    </form>
</body>
</html>