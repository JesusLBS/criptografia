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
<header align="center" style="color:#FF0000"; > <h1>Acceso Concedido</h1></header><br>
<br>
<br>

<form id="login56" action="{{route('salir')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}

  <input class="btn btn-outline-danger " type="submit" name="salir" value="Salir">
</form>






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