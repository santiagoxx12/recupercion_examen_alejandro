<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
</head>
<body>

    <form action="{{route('pay.update', $pay)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        cantidad:
        <br>
        <input name="cantidad" type="string" value="{{old('cantidad',$pay->cantidad) }}">
        <br>
        </label>
        <br>
        <label>
        concepto:
        <br>
        <input name="concepto" type="text" value="{{old('concepto',$pay->concepto)}}">
        <br>
        </label>
        <br>
        <label>
        Fecha de Pago:
        <br>
        <input name="fecha_pg" type="date" value="{{old('fecha_pg',$pay->fecha_pg)}}">
        <br>
        </label>
        <br>
        <br>
        <label>
        tipo de Pago:
        <br>
        <input name="type__pay_id" type="numeric" value="{{old('type__pay_id',$pay->type__pay_id)}}">
        <br>
        </label>
        <br>
        <label>
        Fecha de Pago:
        <br>
        <input name="collaborator_id" type="numeric" value="{{old('collaborator_id',$pay->collaborator_id)}}">
        <br>
        </label>
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>