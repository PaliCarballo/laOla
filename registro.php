<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Ola - registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/logyregistro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



  </head>
  <body>
    <?php
      include("nav.php");

      $noname = "";
      $nomail = "";
      $nopass = "";
      $nodire = "";
      $nociudad = "";
      $nocodpos = "";



      if($_POST){

        $nombre = $_POST['nombre'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $dire = $_POST['dire'];
        $ciudad = $_POST['ciudad'];
        $prov = $_POST['prov'];
        $codpost = $_POST['codpost'];



        if ($_POST['nombre'] == "") {
            $noname = "ingrese nombre";
        }
        if ($_POST['email'] == "") {
            $nomail = "ingrese mail";
        }
        if ($_POST['password'] == "") {
            $nopass = "ingrese contraseña";
        }
        if ($_POST['dire'] == "") {
            $nodire = "ingrese direccion";
        }
        if ($_POST['ciudad'] == "") {
            $nociudad = "ingrese Ciudad";
        }

        if ($_POST['codpost'] == "") {
            $nocodpos = "ingrese código postal";
        }

      }


     ?>


    <form method="post">
        <div class="form-group">
          <label for="inputAddress">Nombre y Apellido</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Cosme Fulanito" name="nombre">
          <?php echo $noname; ?>
        </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
          <?php echo $nomail; ?>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Contraseña</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
          <?php echo $nopass; ?>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Dirección</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Calle Falsa 123" name="dire">
        <?php echo $nodire; ?>
      </div>
      <div class="form-group">
        <label for="inputAddress2">depto., piso, etc.</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="2do. 'A'" name="dire2">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Ciudad</label>
          <input type="text" class="form-control" id="inputCity" name="ciudad">
          <?php echo $nociudad; ?>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Provincia</label>
          <select id="inputState" class="form-control" name="prov">
            <option selected>Elegí...</option>
            <option value="caba">CABA</option>
            <option value="bsas">Buenos Aires</option>
            <option value="tdelf">Tierra del Fuego</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">C.P.</label>
          <input type="text" class="form-control" id="inputZip" name="codpost">
          <?php echo $nocodpos; ?>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-light">Enviar :)</button>
    </form>
    </div>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
include("footer.php") ?>


  </body>
</html>
