<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar {{ $train -> name}}</title>
</head>
<body>
    <li><a href="{{ route('index') }}">Inicio</a></li>
    <li><a href="{{ url('/trains') }}">Trenes</a></li>
    <form method="POST" action="{{ route('trains.update', ['train'=>$train->id]) }}">
        @csrf
        {{ method_field('PUT') }}
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{$train->name}}">
        <label for="passengers">Pasajeros:</label>
        <input type="number" step="1" name="passengers" value="{{$train->passengers}}">
        <label for="year">Año:</label>
        <input type="number" min="1910" max="2030" step="1" name="year" value="{{$train->year}}">
        <select name="train_type_id">
            <option value="{{$train->train_type->id}}" selected>{{ $train->train_type->type}}</option>

            @foreach($train_types as $train_type)
                @if ($train_type->id !== $train->train_type->id)
                    <option value="{{ $train_type->id }}">{{ $train_type->type }}</option>
                @endif
            @endforeach
    
        </select>
        <input type="submit" value="modificar">
    </form>
    
</body>
</html>