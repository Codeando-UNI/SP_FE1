<?php 
	$localhost ="localhost";
	$user = "root";
	$password  = "";
	$database = "correo";

	$conecta=mysqli_connect($localhost, $user, $password, $database) or die(mysql_error("No se pudo  conectar a la base de datos"));
 ?>