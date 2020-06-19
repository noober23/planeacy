<?php 
require("../includes/connection.php");

 	session_start();

 	$nombre = $_SESSION['personal'];

 	$sqlPersona = "SELECT idpersonal from personal WHERE nombre ='$nombre' ";
 	$res = mysqli_query($dbcon,$sqlPersona)or die ("Error en la busqueda".mysqli_error($connection));

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Tareas</title>
</head>
<body>
	
	<div>
		<h1>Gestion de tareas</h1>

	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-dark">
			<thead class="thead-light">
				<td>
					<tr>Nombre</tr>
					<tr>Rol</tr>
					<tr>Participa en</tr>
				</td>
			</thead>
			<tbody>
				
		<?php 
		
			$sqlBusca = "SELECT * from proyecto_has_personal WHERE personal_idpersonal = '$nombre' ";
			$consulta = mysqli_query($connection,$sqlBusca) or die ("Error en la busqueda".mysqli_error($connection));
			while($row = mysqli_fetch_array($consulta)){
				
		?>
				<td>
					<tr><?php echo $row['proyecto_idProyecto'];?></tr>
					<tr><?php echo $row['personal_idpersonal'];?></tr>
					<tr><?php echo $row['personal_rol_idrol'];?></tr>
				</td>
				<?php }
					echo '<span style="color:blue" class="glyphicon glyphicon-warning-sign">ERROR</span>';
				?>
			</tbody>
		</table>
	</div>
	<div class="progress" style="margin: 100px">
		<div id="bar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
			<span class="sr-only">0%  Complete</span>
			<br>
			<input type="text" name="estado" id="estado" 
			value= "cargando" readonly="">
		</div>
	</div>

	<script type="text/javascript" src="../js/progreso.js"></script>
</body>
</html>