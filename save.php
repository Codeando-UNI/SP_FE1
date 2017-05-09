<?php 
include 'conexion.php';
$nombre = $_POST["nombre"];
$mensaje = $_POST["mensaje"];
$guardar = "INSERT INTO datos (id, nombre, mensaje)  VALUES (null,'$nombre', '$mensaje')";
echo $guardar;
$save =  mysqli_query($conecta,$guardar);

 ?>