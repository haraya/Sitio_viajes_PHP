<?php

	include("conexion.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		// Comando para eliminar el elemento de nuestra base de datos
		$query = "DELETE FROM consultaviajes WHERE id =$id";
		$result = mysqli_query($conn, $query);

		if(!$result){
			die("Ha fallado");
		}

		$_SESSION['message'] = 'Informacion eliminada de manera exitosa';
		$_SESSION['message_type'] = 'danger';
		header('Location: visualizar-datos.php');
	}

?>