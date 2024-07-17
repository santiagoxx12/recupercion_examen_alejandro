<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

        @foreach ($pay as $pays)
        <tr>
            <td>{{$pays->cantidad}}</td>
            <td>{{$pays->concepto}}</td>
            <td>{{$pays->fecha_pg}}</td>
            <td>{{$pays->type__pay_id}}</td>
            <td>{{$pays->collaborator_id}}</td>

      
            <td><a href="{{route('pay.show',$pays->id)}}">Mostrar</a></td>
            <td><a href="{{route('pay.edit',$pays->id)}}">Editar</a></td>
            <td>
                <form action="{{route('pay.destroy',$pays->id)}}" method="POST">
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