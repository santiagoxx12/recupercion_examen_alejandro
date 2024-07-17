<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('journey.update', $journey)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            num_plaza:
        <br>
        <input name="num_plazas" type="text" value="{{old('num_plazas',$journey->num_plazas) }}">
        <br>
        </label>
        <br>
        <label>
        fecha:
        <br>
        <input name="fecha" type="date" value="{{old('fecha',$journey->fecha)}}">
        <br>
        </label>
        <br>
        <label>
        otros_datos:
        <br>
        <input name="otros_datos" type="string" value="{{old('otros_datos',$journey->otros_datos)}}">
        <br>
        </label>
        <br>
        <br>
        <label>
        viajeros:
        <br>
        <input name="traveler_id" type="numeric" value="{{old('traveler_id',$journey->traveler_id)}}">
        <br>
        </label>
        <br>
        <label>
        origen:
        <br>
        <input name="origin_id" type="numeric" value="{{old('origin_id',$journey->origin_id)}}">
        <br>
        </label>
        <label>
        destino:
        <br>
        <input name="destination_id" type="numeric" value="{{old('destination_id',$journey->destination_id)}}">
        <br>
        </label>
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>