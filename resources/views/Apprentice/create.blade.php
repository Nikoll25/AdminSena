<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Aprendiz</h1>
<form action="{{route('Apprentice.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br><br>
<label>
    email:
    <br>
    <input type="text" name="email">
</label>
<br><br>
<label>
    Número de teléfono:
    <br>
    <input type="text" name="cell_number">
</label>
<br><br>
 <label for="course_id">Curso</label>

<select name="course_id" id="course_id">
    <option value="">Seleccione un curso</option>

    @foreach($courses as $course)
        <option value="{{ $course->id }}">
            {{ $course->number }}
        </option>
    @endforeach
</select>
<br><br>
 <label for="computer_id">Computador</label>

<select name="computer_id" id="computer_id">
    <option value="">Seleccione un computador</option>

    @foreach($computers as $computer)
        <option value="{{ $computer->id }}">
            {{ $computer->number}}
        </option>
    @endforeach
</select>
<br>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>