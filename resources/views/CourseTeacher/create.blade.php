<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Asignar Instructor a una Ficha</h1>
<form action="{{route('CourseTeacher.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<br><br>
 <label for="course_id">Curso</label>
    <select name="course_id" id="course_id" class="form-control">
        <option value="">Seleccione un curso</option>

        @foreach($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->number }}
            </option>
        @endforeach
    </select>
<br>
<br><br>
 <label for="teacher_id">Instructor </label>

<select name="teacher_id" id="teacher_id">
    <option value="">Seleccione un instructor</option>
    @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}">
            {{ $teacher->name }}
        </option>
    @endforeach
</select>
<br>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>