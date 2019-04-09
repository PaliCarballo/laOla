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
      include("nav.php")


     ?>


    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle Falsa 123">
  </div>
  <div class="form-group">
    <label for="inputAddress2">depto., piso, etc.</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="2do. 'A'" name="dire2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity" name="ciudad">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" class="form-control">
        <option selected>Elegí...</option>
        <option>CABA</option>
        <option>Buenos Aires</option>
        <option>Tierra del Fuego</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">C.P.</label>
      <input type="text" class="form-control" id="inputZip" name="codpost">
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
