<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($player as $players)
        <tr>
            <td>{{$players->fecha_nac}}</td>
            <td>{{$players->nombre}}</td>
            <td>{{$players->posicion}}</td>
            <td>{{$players->equipment_id}}</td>
      
            <td><a href="{{route('player.show',$players->id)}}">Mostrar</a></td>
            <td><a href="{{route('player.edit',$players->id)}}">Editar</a></td>
            <td>
                <form action="{{route('player.destroy',$players->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>