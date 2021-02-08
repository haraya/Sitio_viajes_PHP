<?php  include("conexion.php") ?>

<?php include('includes/header.php') ?>

<?php include('includes/menu-admin.php') ?>



<div class="col-md-12" style="padding-bottom: 125px;">

	<?php
      if(isset($_SESSION['message'])){?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php session_unset(); } ?>



	<table class="table table-bordered">
		<thead>
			<tr style="text-align: center;">
				<th>Nombre</th>	
				<th>Email</th>
				<th>Numero Telefono</th>
				<th>Destino</th>
				<th>Cantidad Adultos</th>
				<th>Cantidad Niños</th>
				<th>Fecha</th>		
				<th>Cantidad Dias</th>	
				<th>Solicitud o Mensaje</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>

			<?php

			$query = "SELECT * FROM consultaviajes";
			$result_viajes = mysqli_query($conn, $query);

			while($fila = mysqli_fetch_array($result_viajes)){ ?>

				<tr style="text-align: center;">
					<td> <?php echo $fila['nombre'] ?> </td>
					<td> <?php echo $fila['email'] ?> </td>
					<td> <?php echo $fila['numeroT'] ?> </td>
					<td> <?php echo $fila['destino'] ?> </td>
					<td> <?php echo $fila['cantidadA'] ?> </td>
					<td> <?php echo $fila['cantidadN'] ?> </td>
					<td> <?php echo $fila['fecha'] ?> </td>
					<td> <?php echo $fila['cantidadD'] ?> </td>
					<td> <?php echo $fila['solicitud'] ?> </td>

					<td style="text-align: center;"> 
						<!-- Boton de Editar -->
						<a href="editar-datos-admin.php?id=<?php echo $fila['id']?>" class="btn btn-warning">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</a> 

						<!-- Boton de Eliminar -->
						<a href="eliminar-datos-admin.php?id=<?php echo $fila['id']?>" class="btn btn-danger">
							<i class="fa fa-trash" aria-hidden="true"></i>
						</a>
					</td>
				</tr>

			<?php } ?>
			
		</tbody>
	</table>
</div>


<!-- Footer -->
<?php include('includes/footer.php') ?>