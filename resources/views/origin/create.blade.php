<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="{{route('origin.store')}}" method="POST">

        @csrf
        <label>
            nombre
            <input type="text" name="nombre">
            <br>
        </label>
        <label>
            otros datos
            <input type="text" name="otros_datos">
            <br>
        </label>
<button type="submit">Guardar</button>
</form>
</body>
</html>