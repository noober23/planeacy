<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Tareas</title>
</head>
<body>
	<h1>Registro TAREAS</h1>
	<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registro de tareas</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <label for="idtarea">idTarea</label>
          <input type="text" name="idtarea" id="idtarea">
          <label for="recurso">Recurso</label>
          <input type="text" name="recurso" id="recurso">
          <label for="fechaInicio">fecha de Inicio</label>
          <input type="date" name="fechaInicio" id="fechaInicio">
          <label for="fechaFin">Fecha Fin</label>
          <input type="date" name="fechaFin" id="fechaFin">
          <label for="duracion">duracion</label>
          <input type="text" name="duracion" id="duracion">
          <label for="porcentaje">porcentaje</label>
          <input type="text" name="porcentaje" id="porcentaje">
          <select>
          	<option>tareaq</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Tarea</th>
			<th>Recurso</th>
			<th>fecha de Inicio</th>
			<th>Fecha Fin</th>
			
		</tr>
	</thead>
	<tbody>
	//	<?php
	//$sql = "SELECT id, employee_name, employee_salary, employee_age FROM employee LIMIT 5";
	//$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	//while( $rows = mysqli_fetch_assoc($resultset) ) {
	//?>
	<tr>
		<td><?php echo $rows["idtarea"]; ?></td>
		<td></td>
		<td></td>
		<td></td>
		
		<td><a href="tareasEditar.php" class="btn btn-primary"></a></td>
		<td><a href="tareasElimina.php" class="btn btn-secondary"></a></td>
		<td>
		<button data-toggle="modal" data-target="#emp-modal" data-id="<?php echo $rows["idtarea"]; ?>"  class="btn btn-sm btn-info">
		<i class="glyphicon glyphicon-eye-open"></i> View</button>
	</td>
	</tr>
	//<?php
	//}
	//?>
	</tbody>
</table>

</body>
</html>