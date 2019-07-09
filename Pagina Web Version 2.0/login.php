<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="login1.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		 <img src=""  id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="#">
		</a>
	</header>
	<section>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
	<div class="login-box">
      <img src="icono.ico" class="avatar" alt="Avatar Image">
      <center> <h1>Iniciar Sesion </h1></center>
	<center>  <label for="usuario">Usuario</label><br> </center>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
	<center>	<label for="password">Password</label><br> </center>
		<input type="password" id="password" name="Password" placeholder="password" ><br>
		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>
