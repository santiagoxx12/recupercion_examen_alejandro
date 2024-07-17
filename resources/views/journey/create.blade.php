<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('journey.store')}}"method="POST">
@csrf
<label>
    num_plazas:
    <input type="text" name="num_plazas">
    <br>
</label>
<label>
    fecha:
    <input type="date" name="fecha">
    <br>
</label>
<label>
    otros_datos:
    <input type="text" name="otros_datos">
    <br>
</label>
viajero
<select name="traveler_id">
    @foreach($travelers as $traveler)
        <option value="{{ $traveler->id }}">{{ $traveler->id }} - {{ $traveler->nombre }}</option>
    @endforeach
</select>
origen
<select name="origin_id">
    @foreach($origins as $origin)
        <option value="{{ $origin->id }}">{{ $origin->id }} - {{ $origin->nombre }}</option>
    @endforeach
</select>
destino
<select name="destination_id">
    @foreach($destinations as $destination)
        <option value="{{ $destination->id }}">{{ $destination->id }} - {{ $destination->nombre }}</option>
    @endforeach
</select>
<button type="submit">Guardar</button>
    </form>
</body>
</html>