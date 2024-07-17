<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="{{route('player.store')}}" method="POST">

        @csrf
        <label>
            fecha_nacimiento
            <input type="date" name="fecha_nac">
            <br>
        </label>
        <label>
            Nombre
            <input type="text" name="nombre">
            <br>
        </label>
        <h1>Equipo:</h1>
        <select name="equipment_id">
            @foreach($equipment as $equipment)
                <option value="{{ $equipment->id }}">{{ $equipment->id }} - {{ $equipment->nombre }}</option>
            @endforeach
        </select>
        <br>
        <label>
            posicion
            <input type="text" name="posicion">
            <br>  
        </label>
<button type="submit">Guardar</button>
</form>
</body>
</html>