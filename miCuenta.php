<?php
      session_start();
      include("nav.php");
?>

<div class="card" style="width: 25%;" align="center">
  <img src="img/gatito.jpg" class="card-img-top" alt="miau">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_SESSION['nombre'];?></h5>
    <p class="card-text">cosas del usuario....</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">podria ir un link a otro lados</li>
    <li class="list-group-item">o podria ser un menu</li>
    <li class="list-group-item">no me se...</li>
  </ul>
  <div class="card-body">
    <a href="carrito.php" class="card-link">al carrito y mas alla!!</a>
    <a href="index.php" class="card-link">Inicio</a>
  </div>
</div>








      <?php include("footer.php") ?>
