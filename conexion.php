<!--CONEXION CON LA BASE DE DATOS-->
<?php
	
	$mysqli = new mysqli('LOCALHOST:3307', 'root', '', 'taller_mecanico'); 
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>