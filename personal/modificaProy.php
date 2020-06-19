<? php
	require(connection.php);


	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descri'];
	$encarga = $_POST['encarga'];
	$fechaIni = $_POST['fechaInicio'];
	$fechaFin = $_POST['fechaFin'];

	$cons = "UPDATE  proyecto SET (titulo ='$titulo',descripcion ='$descripcion',encarga='$encarga',fechaInicio='$fechaIni',fechaFin='$fechaFin')" ;

	$query= mysqli_query($connection,$cons);
	if($query){
		echo "Consulta exitosa";
	}
	else{
		echo "ERROR";
	}
?>
