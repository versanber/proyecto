<?php
	
	require 'conexion.php';
	
	$clave=$_POST["clave"];
	$fecha=$_POST["fecha"];
	$clave_sistema[]=$_POST["afinacion,
							sistema_combustible,
							sistema_admision,
							sistema_escape,
							sistema_ignición,
							sistema_lubricacion,
							sistema_refrigeracion,
							sistema_transmicion,
							sistema_eléctrico, 
							sistema_frenos,
							direccion,
							climatizacion,
							hojalateria"];
								
	$clave_consumible[]=$_POST["afinacion[],
								sistema_combustible[],
								sistema_admision[],
								sistema_escape[],
								sistema_ignición[],
								sistema_lubricacion[],
								sistema_refrigeracion[],
								sistema_transmicion[],
								sistema_eléctrico[],
								sistema_frenos[],
								direccion[],
								climatizacion[],
								hojalateria[]"];
	$clave_servicio_corto=$_POST["corto"];
	$clave_servicio_largo=$_POST["largo"];

	
	
	$sql="INSERT INTO registros VALUES('$clave','$fecha','$clave_sistema','$clave_consumible','$clave_servicio_corto','$clave_servicio_largo')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="form.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
