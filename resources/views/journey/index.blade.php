<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($journey as $journeys)
        <tr>
            <td>{{$journeys->num_plazas}}</td>
            <td>{{$journeys->fecha}}</td>
            <td>{{$journeys->otros_datos}}</td>
            <td>{{$journeys->traveler_id}}</td>
            <td>{{$journeys->origin_id}}</td>
            <td>{{$journeys->destination_id}}</td>

      
            <td><a href="{{route('journey.show',$journeys->id)}}">Mostrar</a></td>
            <td><a href="{{route('journey.edit',$journeys->id)}}">Editar</a></td>
            <td>
                <form action="{{route('journey.destroy',$journeys->id)}}" method="POST">
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