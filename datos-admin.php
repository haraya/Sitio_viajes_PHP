<?php 

include("conexion.php");

if (isset($_POST['guardar'])){
	$nombre = $_POST['nombre'];
	$destino = $_POST['destino'];
	$cantidadA = $_POST['cantidadA'];
	$cantidadN = $_POST['cantidadN'];
	$fecha = $_POST['fecha'];
	$solicitud = $_POST['solicitud'];
	$cantidadD = $_POST['cantidadD'];
	$email = $_POST['email'];
	$numeroT = $_POST['numeroT'];


	$query ="INSERT INTO consultaviajes(nombre, destino, cantidadN, fecha, solicitud, cantidadD, cantidadA, email, numeroT) 
	VALUES('$nombre', '$destino', '$cantidadN', '$fecha', '$solicitud', '$cantidadD', '$cantidadA', '$email', '$numeroT')";

	$result = mysqli_query($conn, $query);

	if(!$result){
		die("HA FALLADO");
	}

	
	// Mensaje cuando se envia el mensaje
	$_SESSION['message']='El mensaje se ha enviado correctamente';
	$_SESSION['message_type'] = 'success';
	
	header("Location: visualizar-datos.php");
}


?>