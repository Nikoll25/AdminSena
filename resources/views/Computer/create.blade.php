<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Computador</h1>
<form action="{{route('Computer.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Numero:
    <br>
    <input type="text" name="number">
</label>
<br><br>
<label>
    Marca:
    <br>
    <input type="text" name="brand">
</label>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>