<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($goal as $goals)
        <tr>
            <td>{{$goals->min}}</td>
            <td>{{$goals->desc}}</td>
            <td>{{$goals->player_id}}</td>
            <td>{{$goals->game_id}}</td>
         
      
            <td><a href="{{route('goal.show',$goals->id)}}">Mostrar</a></td>
            <td><a href="{{route('goal.edit',$goals->id)}}">Editar</a></td>
            <td>
                <form action="{{route('goal.destroy',$goals->id)}}" method="POST">
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