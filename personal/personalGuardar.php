<?php
	include("../connection.php");

	$nombre = $_POST['nombre'];
	$apellido =$_POST['apellido'];
	$edad = $_POST['edad'];
	$correo  =$_POST['correo'];
	$telefono =$_POST['telefono'];

	$sql1="INSERT INTO personal (nombre,apellido,edad,correo,telefono) VALUES('$nombre','$apellido','$edad','$correo','$telefono')";
	$resultado = mysqli_query($connection,$sql1);
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO GUARDADO</h3>
				<?php } else { ?>
				<h3>ERROR AL GUARDAR</h3>
				<?php } ?>
				<a href="index.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
	</div>
</body>
</html>
