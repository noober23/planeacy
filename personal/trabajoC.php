<?php 
	require("../includes/connection.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!--
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->

	<!--Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/styles1.css">

	<script src="../js/jquery.min.js"></script>
	
<!--
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
-->

	<title>Registro de Trabajo</title>
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-black text-light rounded">Registro de Trabajo</h1>
			<div class="d-flex justify-content-center">
				<form action="registro.php" method="post" class="w-50">
					<div class="row">
						<div class="col-25">
							<label for="ci">CI</label>
						</div>
						<div class="col-75">
							<input type="text" name="ci" id="ci" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="nombre">Nombre</label>
						</div>
						<div class="col-75">
							<input type="text" name="nombre" id="nombre" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="idProyecto">id Proyecto</label>
						</div>
						<div class="col-75">
							<input type="text" name="idProyecto" id="idProyecto">
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-25">
							<label for="descripcion">Descripcion</label>
						</div>
						<div class="col-75">
							<textarea id="descripcion" name="descripcion"></textarea>
						</div>
	
					</div>
					
					<div class="row">
						<div class="col-75">
							<label for= "archivo">Trabajo</label>
						</div>
						<div>
							<input type="file" name="archivo" id="archivo" />
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary mb-2">Finalizar</button>
					
				</form>
			</div>
		</div>
	</main>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>