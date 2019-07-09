<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="gym.ico" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<center>
		<form action="buscar.php" method="post" >
		<input type="text" name="codigo" placeholder="Ingresar una palabra">
		<input style="background red"; type="submit" name="name" value="Buscar">
		</form>
		
	<?php
		include 'conexion.php';
        $re= ("select * from productos" ) or die(mysql_error());
       
        $query=mysqli_query($conexion, $re); 
        
        while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
		
        
        
        ?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		
		

		
	</section>
</body>
</html>	