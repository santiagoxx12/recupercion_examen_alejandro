<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="{{route('goal.store')}}" method="POST">

        @csrf
        <label>
            <h1>Partido:</h1>
        <select name="game_id">
            @foreach($games as $game)
                <option value="{{ $game->id }}">{{ $game->id }} - {{ $game->nombre }}</option>
            @endforeach
        </select>
        <h1>Jugador:</h1>
        <select name="player_id">
            @foreach($players as $player)
                <option value="{{ $player->id }}">{{ $player->id }} - {{ $player->nombre }}</option>
            @endforeach
        </select>
            minuto
            <input type="text" name="min">
            <br>
        </label>
        <label>
            desc
            <input type="text" name="desc">
            <br>
        </label>
<button type="submit">Guardar</button>
</form>
</body>
</html>