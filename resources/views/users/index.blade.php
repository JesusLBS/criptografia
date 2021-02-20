<!DOCTYPE html>
<html>

<!---------------------------------------------------------------*------------------------------------------------------------->
<head>
	<title>Encryption and Decription in laravel</title>
	<meta charset="utf-8">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="empleados/empleado.css">
</head>

<!---------------------------------------------------------------*------------------------------------------------------------->
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header align="center" style="color:#FF0000"; > <h1>Criptografía RSA y SHA256 en PHP</h1></header><br>
<br>
<br>



<!-----------------------------------------------------Tabla Consulta--------------------------------------------------------->

<table id="consulta-usuarios">
		<thead>
			<tr>v
        <th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
        <th>Password</th>
			</tr>
		</thead>
		@foreach ($user as $user1)
		<tr>
      <td>{{$user1-> id}}</td>
			<td>{{$user1-> name}}</td>
			<td>{{$user1-> email}}</td>
      <td>{{$user1-> password}}</td>
		</tr>
		@endforeach
</table>



<br>
<br>

<!-----------------------------------------------------Modal Registro--------------------------------------------------------->

<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Registar
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--****************************************-->
<br>
<br>
<form id="usuario_register" action="{{route('usuario_register')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}
<br>
 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nombre Usuario" required="" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Email " required="" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Ingresa un Password" required="" name="password">
    </div>
  </div>

<center>
     <input class="btn btn-outline-primary " type="submit" name="guardar_usuario" value="Guardar">
  </center>
</form>
      </div>
      <div class="modal-footer">
        <center>
     <button type="" class="btn btn-outline-danger" data-dismiss="modal" onclick="function clear();" >Cerrar</button>
  </center>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<!-----------------------------------------------------Criptografía RSA en PHP--------------------------------------------------------->

<br>
<br>
<br>
<br>

<br>
<br>
<br>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>