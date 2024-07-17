<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('goal.update', $goal)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        minutos:
        <br>
        <input name="min" type="text" value="{{old('min',$goal->min) }}">
        <br>
        </label>
        <br>
        <label>
        desc:
        <br>
        <input name="desc" type="text" value="{{old('desc',$goal->desc)}}">
        <br>
        </label>
        <br>
        <label>
            Jugador:
            <br>
            <input name="player_id" type="numeric" value="{{old('player_id',$goal->player_id)}}">
            <br>
            </label>
            <br>
            <label>
                Partido:
                <br>
                <input name="game_id" type="numeric" value="{{old('game_id',$goal->game_id)}}">
                <br>
                </label>
                <br>
       
        <button  type="submit">Actualizar Goool</button>
       
    </form>
   
</body>
</html>