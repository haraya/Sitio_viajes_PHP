<?php

	include("conexion.php");

include('includes/header.php'); 

 include('includes/menu-admin.php');

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		// Comando para editar el elemento de nuestra base de datos
		$query = "SELECT * FROM consultaviajes WHERE id =$id";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result)==1) {
			$row = mysqli_fetch_array($result);
			$nombre = $row['nombre'];
			$destino = $row['destino'];
			$cantidadA = $row['cantidadA'];
      $cantidadN = $row['cantidadN'];
			$fecha = $row['fecha'];
			$cantidadD = $row['cantidadD'];
			$solicitud = $row['solicitud'];
      $email = $row['email'];
      $numeroT = $row['numeroT'];

		}

	}



  if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $destino = $_POST['destino'];
    $cantidadN = $_POST['cantidadN'];
    $fecha = $_POST['fecha'];
    $solicitud = $_POST['solicitud'];
    $cantidadD = $_POST['cantidadD'];
    $cantidadA = $_POST['cantidadA'];
    $email = $_POST['email'];
    $numeroT = $_POST['numeroT'];
   
   
    $query = "UPDATE consultaviajes set nombre='$nombre', destino='$destino', cantidadN='$cantidadN', fecha='$fecha', solicitud='$solicitud', cantidadD='$cantidadD', cantidadA='$cantidadA', email='$email', numeroT='$numeroT' WHERE id =$id";
    $result = mysqli_query($conn, $query); 

     if(!$result){
      die("Ha fallado");
    }

     // Mensaje cuando se envia el mensaje
    $_SESSION['message'] = 'Informacion actualizada de manera exitosa';
    $_SESSION['message_type'] = 'warning';
    header('Location: visualizar-datos.php');
  }

?>


<?php include('includes/header.php') ?>



 <!-- Section Consulta Paquetes -->
  <section class="adjuste-form">


    <!--  Codigo PHP para validar los datos -->
    <?php
      if(isset($_SESSION['message'])){?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php } ?>
    <!-- Fin de codigo de PHP -->

  <form action="editar-datos-admin.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <p class="titulo-form">FORMULARIO PARA CONSULTA DE VIAJES</p>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Nombre</label>
        <input type="text" class="form-control"  name="nombre" value="<?php echo $nombre; ?>"
         placeholder="Actualizar nombre">
      </div>
       <div class="form-group col-md-4">
        <label>Numero de telefono</label>
        <input type="text" class="form-control" name="numeroT" value="<?php echo $numeroT; ?>" placeholder="Actualizar numero de telefono">
      </div>

      <div class="form-group col-md-4">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Actualizar email">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Destino</label>
        <input type="text" class="form-control" name="destino" value="<?php echo $destino; ?>" placeholder="Actualizar destino">
      </div>

       <div class="form-group col-md-6">
        <label>Fecha de registro</label>
        <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="dd/mm/yyyy">
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-4">
        <label>Cantidad de Adultos</label>
        <input type="number" class="form-control" name="cantidadA" value="<?php echo $cantidadA; ?>" placeholder="Actualizar cantidad de adultos">
      </div>

      <div class="form-group col-md-4">
        <label>Cantidad de Niños</label>
        <input type="number" class="form-control" name="cantidadN" value="<?php echo $cantidadN; ?>" placeholder="Actualizar cantidad de niños">
      </div>


      <div class="form-group col-md-4">
        <label>Cantidad de dias</label>
        <input type="number" class="form-control" name="cantidadD" value="<?php echo $cantidadD; ?>" placeholder="Actualizar cantidad de dias">
      </div>

    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label>Solicitud</label>
        <textarea name="solicitud" class="form-control" >
          <?php echo $solicitud; ?>
        </textarea>
      </div>
    </div>
    
    <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
  </form>
</section>



<?php include('includes/footer.php') ?>