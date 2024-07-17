<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($type_Pay as $type_Pays)
        <tr>
            <td>{{$type_Pays->tipo}}</td>
      
            <td><a href="{{route('type_Pay.show',$type_Pays->id)}}">Mostrar</a></td>
            <td><a href="{{route('type_Pay.edit',$type_Pays->id)}}">Editar</a></td>
            <td>
                <form action="{{route('type_Pay.destroy',$type_Pays->id)}}" method="POST">
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