<?php  include("conexion.php") ?>

<?php include('includes/header.php') ?>

<?php include('includes/menu-admin.php') ?>


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
    <?php session_unset(); } ?>
    <!-- Fin de codigo de PHP -->

  <form action="datos-admin.php" method="POST">
    <p class="titulo-form">FORMULARIO PARA CONSULTA DE VIAJES</p>
    <div class="form-row">

      <div class="form-group col-md-4">
        <label>Nombre</label>
        <input type="text" class="form-control"  name="nombre" placeholder="Nombre">
      </div>

      <div class="form-group col-md-4">
        <label>Numero de telefono</label>
        <input type="text" class="form-control" name="numeroT" placeholder="Numero de telefono">
      </div>

      <div class="form-group col-md-4">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
    </div>

   

    <div class="form-row">

      <div class="form-group col-md-6">
        <label>Destino</label>
        <input type="text" class="form-control" name="destino" placeholder="Destino">
      </div>

       <div class="form-group col-md-6">
        <label>Fecha de registro</label>
        <input type="date" class="form-control" name="fecha" placeholder="dd/mm/yyyy">
      </div>

    </div>
    

    <div class="form-row">

      <div class="form-group col-md-4">
        <label>Cantidad de Adultos</label>
        <input type="number" class="form-control" name="cantidadA">
      </div>

      <div class="form-group col-md-4">
        <label>Cantidad de Niños</label>
        <input type="number" class="form-control" name="cantidadN">
      </div>


      <div class="form-group col-md-4">
        <label>Cantidad de dias</label>
        <input type="number" class="form-control" name="cantidadD">
      </div>

    </div>

    <div class="form-row">

      <div class="form-group col-md-12">
        <label>Descripción</label>
        <textarea class="form-control" name="solicitud" placeholder="Mensaje o Descricpion"></textarea>
      </div>

    </div>
    
    <button type="submit" name="guardar" class="btn btn-primary">Enviar</button>
  </form>
</section>


<!-- Footer -->
<?php include('includes/footer.php') ?>