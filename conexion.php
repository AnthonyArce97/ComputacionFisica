<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="compufisica";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

