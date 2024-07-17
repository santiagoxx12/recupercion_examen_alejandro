<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="{{route('type_Pay.store')}}"method="POST">
    @csrf
    <label>
        Tipo:
        <input type="text" name="tipo">
        <br>
    </label>
    <button type="submit">Guardar</button>
        </form>
    </body>
    </html>