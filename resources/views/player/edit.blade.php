<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('player.update', $player)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        fecha_nacimiento:
        <br>
        <input name="fecha_nac" type="date" value="{{old('fecha_nac',$player->fecha_nac) }}">
        <br>
        </label>
        <br>
        <label>
        nombre:
        <br>
        <input name="nombre" type="text" value="{{old('nombre',$player->nombre)}}">
        <br>
        </label>
        <br>
        <label>
        posicion:
        <br>
        <input name="posicion" type="text" value="{{old('posicion',$player->posicion)}}">
        <br>
        </label>
        <br>
       
        Equipo:
        <br>
        <input name="equipment_id" type="numeric" value="{{old('equipment_id',$player->equipment_id)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">Actualizar Futbolista</button>
       
    </form>
   
</body>
</html>