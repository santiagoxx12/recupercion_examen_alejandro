<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('pay.store')}}"method="POST">
@csrf
<label>
    cantidad:
    <input type="text" name="cantidad">
    <br>
</label>
<label>
    concepto:
    <input type="text" name="concepto">
    <br>
</label>
<label>
    Fecha de Pago:
    <input type="date" name="fecha_pg">
    <br>
</label>
colaborador
<select name="collaborator_id">
    @foreach($collaborators as $collaborator)
        <option value="{{ $collaborator->id }}">{{ $collaborator->id }} - {{ $collaborator->nombre }}</option>
    @endforeach
</select>
tipo de pago
<select name="type__pay_id">
    @foreach($type_pays as $type_pay)
        <option value="{{ $type_pay->id }}">{{ $type_pay->id }} - {{ $type_pay->tipo }}</option>
    @endforeach
</select>
<button type="submit">Guardar</button>
    </form>
</body>
</html>