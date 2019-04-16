<?php include("nav.php");

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

        /* require_once ('cliente.php');

        if ($_POST) {
        $clienteNuevo = fann_get_network_type
            Cliente ($_POST['nombre'], $_POST['apellido']);

            var_dump($clienteNuevo);

            $errorDni = $clienteNuevo->getDni( == null ? 'cargar nuevo dni' : '');*/
        }

      


     ?>

     <div class="log">


    <form method="post">
        <div class="form-group">
          <label for="inputAddress">Nombre y Apellido</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Ingresá tu nombre" name="nombre">
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
        <label for="inputAddress2">Dpto., piso, etc.</label>
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











<?php include("footer.php") ?>



