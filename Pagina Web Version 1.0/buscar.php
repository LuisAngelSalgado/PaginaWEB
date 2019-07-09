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
		
	
		
</head>
<body>
	
        
        
    
   
    <center>
    <form action="buscar.php" method="post" >
        <input  type="text" name="codigo" placeholder="Ingrese una palabra">
        
        <input  style="background:#f5f56b"; type="submit" name="name" value="Buscar">
        <button class="botoness"> <a style="color:#FF0000"; href="index.php">Regresar </a> </button>
    
    </form>
        </center>
	<section>
		

<?php
		include 'conexion.php';
        $codigo= $_POST['codigo'];

        $re= ("select * from productos where nombre='$codigo'") or die(mysql_error());
       
        $query=mysqli_query($conexion, $re); 
        
        while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
		
        
        
        ?>
			<div class="producto">
			<center>
                <a href="./detalles.php?id=<?php  echo $f['id'];?>"> <img src="./productos/<?php echo $f['imagen'];?>"> </a>
                <span>$<?php echo $f['precio'];?></span><br>
				<span><?php echo $f['nombre'];?></span><br>
                <button> <a style="color:#000000" href="./detalles.php?id=<?php  echo $f['id'];?>">Detalles</a> </button>
			</center>
		</div>
	<?php
		}
	?>

      