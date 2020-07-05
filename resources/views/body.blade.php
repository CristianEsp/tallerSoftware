<h1 class="text-light"><span class="badge badge-dark">ALUMNOS</h1>

<!---
<form class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>
-->

<table class="table" id="example1">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Rut</th>
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th>
        <th scope="col">Carrera</th>
        <th scope="col">Operacion</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($select as $tupla)
      <tr>
        <td>{{$tupla->rut_alumno}}</td>
        <td>{{$tupla->nombre_alumno}}</td>
        <td>{{$tupla->telefono}}</td>
        <td>{{$tupla->carrera}}</td>
        <td>
        <!-- Button trigger modal edit -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#actualizar{{$tupla->rut_alumno}}">
          Actualizar
        </button>
        <!-- Modal Actualizar-->
        <div class="modal fade" id="actualizar{{$tupla->rut_alumno}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('update')}}" method="POST">
                 <!-- <fieldset disabled> -->
                    <div class="form-group">
                      <label for="disabledTextInput">Rut</label>
                      <input class="form-control" value="{{$tupla->rut_alumno}}" type="text" name="rutalum">
                      <small id="emailHelp" class="form-text text-muted">Este campo no se puede modificar</small>
                    </div>
                 <!-- </fieldset> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input class="form-control" value="{{$tupla->nombre_alumno}}" type="text" name="nombrealum">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input class="form-control" value="{{$tupla->telefono}}" type="text" name="telefonoalum">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Carrera</label>
                    <input class="form-control" value="{{$tupla->carrera}}" type="text" name="carreraalum">
                  </div>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$tupla->rut_alumno}}">
          Eliminar
        </button>
        <!-- Modal Eliminar-->
        <div class="modal fade" id="delete{{$tupla->rut_alumno}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ¿Est&aacute; seguro que desea eliminar a {{$tupla->nombre_alumno}}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <form method="POST" action="{{route('delete')}}">
                <input type="hidden" value="{{$tupla->rut_alumno}}" name="rutalum">
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <br>
  <!-- Button trigger modal create -->
  <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#create{{$tupla->rut_alumno}}">
    Ingresar Alumno
  </button>
  <!-- Modal Create-->
  <div class="modal fade" id="create{{$tupla->rut_alumno}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar Alumno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('insert')}}" method="POST">
          <!-- <fieldset disabled> -->
              <div class="form-group">
                <label for="disabledTextInput">Rut</label>
                <input class="form-control" value="" type="text" name="rutalum">
              </div>
          <!-- </fieldset> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input class="form-control" value="" type="text" name="nombrealum">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Telefono</label>
              <input class="form-control" value="" type="text" name="telefonoalum">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Carrera</label>
              <input class="form-control" value="" type="text" name="carreraalum">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar Alumno</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function () {
    var table = $('#example1').DataTable({
      "paging": true,
      "searching": true,
      "info": true,
      "autoWidth": true,
      "dom": 'Bfrtip',
      "buttons": ['csvHtml5', 'excelHtml5']
    });
  });
</script>
</html>