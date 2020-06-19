<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->

	<!--Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="../css/styles1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
<!--
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
-->

	<title>Registro del Personal</title>
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-black text-light rounded">LOGIN</h1>
			<div class="d-flex justify-content-center">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="w-50">
					
					<div class="row">
						<div class="col-25">
							<label for="user">Nombre:</label>
						</div>
						<div class="col-75">
							<input type="text" name="user" id="user" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="apellido">Apellido</label>
						</div>
						<div class="col-75">
							<input type="text" name="apellido" id="apellido">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="edad">Edad</label>
						</div>
						<div class="col-75">
							<input type="text" name="edad" id="edad">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="correo">Correo</label>
						</div>
						<div class="col-75">
							<input type="text" name="correo" id="pass">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="rol">rol</label>
						</div>
						<div class="col-75">
							<select>
								<option></option>
							</select>>
						</div>
					</div>

					<input type="submit" name="login" class="btn btn-primary mb-2" value="Ingresar" >
						
					
				</form>
			</div>
		</div>
	</main>
<div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>