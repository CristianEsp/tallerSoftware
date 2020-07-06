{{--<body class="container" >
  <!-- /.login-logo -->
  <br><br><br><br>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicio de Sesion</p>
      
      <form method="post" action="{{ url('api/inicio_sesion')  }}" class="form-signin">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="rut" name="Rut" require>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="contrasena" name="Contraseña" require>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</body>
</html>--}}

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="http://127.0.0.1:8000/bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="http://127.0.0.1:8000/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/datatables/Buttons-1.6.2/css/buttons.bootstrap4.min.css"/>

<script src="http://127.0.0.1:8000/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- JS, Popper.js, and jQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="http://127.0.0.1:8000/datatables/DataTables-1.10.21/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/datatables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
<!-- JS, Popper.js, and jQuery -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/bootstrap/css/mystyle.css')}}">

</head>

<body>
<div class="container-fluid">

<div class="main">
<div class="container">
  <center>
  <div class="middle">
        <div id="login">
  
          <form method="post" action="{{ url('api/inicio_sesion')  }}" class="form-signin">>
  
            <fieldset class="clearfix">
  
              <p ><span class="fa fa-user"></span><input type="text" class="form-control" placeholder="Rut Usuario" name="Rut" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
              <p><span class="fa fa-lock"></span><input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
              
               <div>
                                  <span style="width:50%; text-align:right;  display: inline-block;"><button type="submit" class="btn btn-primary btn-block">Ingresar</button></span>
                              </div>
  
            </fieldset>
  <div class="clearfix"></div>
          </form>
  
          <div class="clearfix"></div>
  
        </div> <!-- end login -->
        <div class="logo"> <img src="/images/logo_ucm.png" width="180px" height="150px">
            
            <div class="clearfix"></div>
        </div>
        
        </div>
  </center>
      </div>
  
  </div>

</div>

</body>
