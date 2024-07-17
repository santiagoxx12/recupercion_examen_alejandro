<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('origin.update', $origin)}}"  method="POST">

        @csrf
        @method('put')
        <br>
        <label>
            nombre:
            <br>
            <input name="nombre" type="text" value="{{old('nombre',$origin->nombre)}}">
            <br>
            </label>
            <br>
            <label>
                otros datos:
                <br>
                <input name="otros_datos" type="text" value="{{old('otros_datos',$origin->otros_datos)}}">
                <br>
                </label>
                <br>
       
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>