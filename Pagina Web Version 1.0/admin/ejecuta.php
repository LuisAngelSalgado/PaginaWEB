<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		$re=("delete from productos where Id=".$_POST['Id']);
		$query=mysqli_query($conexion,$re);
		unlink("../productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		$re=("update productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		$query=mysqli_query($conexion,$re);
		$re=("update productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		$query=mysqli_query($conexion,$re);
		$re=("update productos set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
		$query=mysqli_query($conexion,$re);
		echo 'El producto se ha modificado';
	}

?>
