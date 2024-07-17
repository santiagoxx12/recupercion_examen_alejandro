<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($origin as $origins)
        <tr>
            <td>{{$origins->nombre}}</td>
            <td>{{$origins->otros_datos}}</td>
         
      
            <td><a href="{{route('origin.show',$origins->id)}}">Mostrar</a></td>
            <td><a href="{{route('origin.edit',$origins->id)}}">Editar</a></td>
            <td>
                <form action="{{route('origin.destroy',$origins->id)}}" method="POST">
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