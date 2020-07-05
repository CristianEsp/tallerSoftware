<form action="{{route('update')}}" method="POST">
    <input value="{{$alumno['rut_alumno']}}" type="text" name="rutalum">
    <input value="{{$alumno['nombre_alumno']}}" type="text" name="nombrealum">
    <input value="{{$alumno['telefono']}}" type="text" name="telefonoalum">
    <input value="{{$alumno['carrera']}}" type="text" name="carreraalum">
    <button type="submit">Actualizar</button>
</form>