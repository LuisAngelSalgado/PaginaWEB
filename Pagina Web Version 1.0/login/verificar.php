<?php
session_start();
include "../conexion.php";
$re=("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
					 Password='".$_POST['Password']."'")	or die(mysql_error());
					 $query=mysqli_query($conexion, $re);
					 while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido'],'Imagen'=>$f['Imagen']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: ../admin.php");
	}else{
		header("Location: ../login.php?error=datos no validos");
	}
?>