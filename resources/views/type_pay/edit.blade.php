<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('type_Pay.update', $type_Pay)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Tipo:
        <br>
        <input name="tipo" type="string" value="{{old('tipo',$type_Pay->tipo) }}">
        <br>
        </label>
        <button  type="submit">Actualizar</button>
    </form>
   
</body>
</html>