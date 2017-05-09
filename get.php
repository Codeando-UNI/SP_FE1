<?php 
	include 'conexion.php';
	$query = 'SELECT * FROM datos LIMIT  0 , 10';
	$sad = mysqli_query($conecta, $query); 
	$data = array();
	while ( $mostrar =mysqli_fetch_array($sad)) {
		$tmp = array("nombre"=>$mostrar["nombre"], "mensaje"=>$mostrar["mensaje"]);
		array_push($data, $tmp);
		
	}	
	echo json_encode($data);
	//printf($arr[0]);

 ?>