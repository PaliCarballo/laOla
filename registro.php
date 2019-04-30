



<?php include("nav.php");

      $errores = 0;
      $todosLosErrores = [];

      $noname = "";
      $nomail = "";
      $nopass = "";
      $nodire = "";
      $nociudad = "";
      $nocodpos = "";
      $noaltura= "";


        if($_POST){

        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $pass=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $dire=$_POST["dire"];
        $altura=$_POST["altura"];
        $ciudad=$_POST["ciudad"];
        $prov=$_POST["prov"];
        $codpos=$_POST["codpos"];

        $usuario["nombre"]=$nombre;
        $usuario["email"]=$email;
        $usuario["password"]=$pass;
        $usuario["dire"]=$dire;
        $usuario["altura"]=$altura;
        $usuario["ciudad"]=$ciudad;
        $usuario["prov"]=$prov;
        $usuario["codpos"]=$codpos;
        $usuarioJson= json_encode($usuario);
        file_put_contents("datos.json",$usuarioJson,FILE_APPEND/LOCK_EX);



/*validacion nombre*/
        if ($_POST["nombre"] == "")
         {
          $noname = "Completa tu nombre por favor.";
          $errores++;
          $todosLosErrores[] = "Completa tu nombre por favor.";
        }
        else if(strlen($_POST["nombre"]) < 4 )
        {
          $nomail = "su nombre debe tener como minimo cuatro caracteres";
          $errores++;
          $todosLosErrores[] = "su nombre debe tener como minimo dos caracteres.";
        }
/*validacion mail*/
        if ($_POST['email'] == "")
         {
            $nomail = "ingrese mail válido";
            $errores++;
            $todosLosErrores[] = "ingrese mail válido.";
        }
        else if (!filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
          $nomail = "ingrese formato válido de email";
          $errores++;
          $todosLosErrores[] = "ingrese formato válido de email.";
        }
/*validacion pass*/
        if ($_POST['password'] == "")
        {
            $nopass = "contraseña invalida";
            $errores++;
            $todosLosErrores[] = "contraseña invalida.";
        }
        else if(strlen($_POST["password"]) < 4 )
        {
          $nopass = "la contraseña debe tener 4 caracteres como mínimo";
          $errores++;
          $todosLosErrores[] = "la contraseña debe tener 4 caracteres como mínimo.";
        }

//validacion de Direccion
        if ($_POST['dire'] == "") {
            $nodire = "ingrese dirección válida";
            $errores++;
            $todosLosErrores[] = "ingrese dirección válida.";
        }
        else if(strlen($_POST["dire"]) < 5 )
        {
          $nodire = "su direccion debe tener como minimo cinco caracteres";
          $errores++;
          $todosLosErrores[] = "su mail debe tener como minimo dos caracteres.";
        }
//validacion de altura
        if ($_POST["altura"] == ""){
          $noaltura = "ingrese direccion válida";
          $errores++;
          $todosLosErrores[] = "ingrese direccion válida.";
        }
          else if (!filter_var($_POST["altura"] , FILTER_VALIDATE_INT) === 0 || filter_var($_POST["altura"] , FILTER_VALIDATE_INT) === false)
        {
          $noaltura = "Su altura debe ser un numero válido";
          $errores++;
          $todosLosErrores[] = "Su altura debe ser un numero válido.";
        }
//validacion de Ciudad
        if ($_POST["ciudad"] == "") {
            $nociudad = "ingrese Ciudad válida";
            $errores++;
            $todosLosErrores[] = "ingrese Ciudad válida.";
        }
        else if(strlen($_POST["ciudad"]) < 5 )
        {
          $nociudad = "su ciudad debe tener como minimo cuatro caracteres";
          $errores++;
          $todosLosErrores[] = "su ciudad debe tener como minimo cuatro caracteres.";
        }
        //validacion Provincia
        if ($_POST["prov"] == "") {
            $noprov = "ingrese una Provincia";
            $errores++;
            $todosLosErrores[] = "ingrese una Provincia";
        }

//validar codigo postal
        if ($_POST["codpos"] == "") {
            $nocodpos = "ingrese Código Postal válido";
            $errores++;
            $todosLosErrores[] = "ingrese Código Postal válido.";
        }
        else if (!filter_var($_POST["codpos"] , FILTER_VALIDATE_INT) === 0 || filter_var($_POST["codpos"] , FILTER_VALIDATE_INT) === false)
        {

          $nocodpos = "su C.P debe ser un nùmero";
          $errores++;
          $todosLosErrores[] = "su C.P debe ser un nùmero ";
        }

        if(count($todosLosErrores) == 0){
          header("Location:login.php");exit;
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


    <form class="form-reg" method="post" enctype="mmultipart/form-data">
        <div class="form-group">
          <label for="inputAddress">Nombre y Apellido</label>
          <input type="text" class="form-control <?php echo ($noname!='') ?  'is-invalid':''; ?>" id="nombre" placeholder="" name="nombre">
          <div class="invalid-feedback">
            <?php echo $noname; ?>
          </div>
        </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control <?php echo ($nomail!='') ?  'is-invalid':''; ?>"id="email" placeholder="" name="email">
          <div class="invalid-feedback">

            <?php echo $nomail; ?>
          </div>
          </div>

        <div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control <?php echo ($nopass!='') ?  'is-invalid':''; ?>" id="password" placeholder="" name="password">
          <div class="invalid-feedback">

            <?php echo $nopass; ?>
          </div>
        </div>
        <!--<div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control <?php echo ($nopass!='') ?  'is-invalid':''; ?>" id="password" placeholder="" name="password">
          <div class="invalid-feedback">

            <?php echo $nopass; ?>
          </div>
        </div>-->
      </div>
      <div class="form-row">

      <div class="form-group col-md-8">
        <label for="dire">Dirección</label>
        <input type="text" class="form-control <?php echo ($nodire!='') ?  'is-invalid':''; ?>" id="dire" placeholder="" name="dire">
        <div class="invalid-feedback">
          <?php echo $nodire; ?>
        </div>

      </div>
      <div class="form-group col-md-4">
        <label for="altura">Altura</label>
        <input type="text" class="form-control <?php echo ($noaltura!='') ?  'is-invalid':''; ?>" id="altura" placeholder="ingrese nùmero" name="altura">
        <div class="invalid-feedback">

          <?php echo $noaltura; ?>
        </div>
      </div>

    </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ciudad">Ciudad</label>
          <input type="text" class="form-control <?php echo ($nociudad!='') ?  'is-invalid':''; ?>" id="ciudad" name="ciudad" placeholder="">
          <div class="invalid-feedback">

            <?php echo $nociudad; ?>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label for="prov">Provincia</label>
          <select id="prov" class="form-control" name="prov">
            <option selected>Elegí...</option>
            <option value="caba">CABA</option>
            <option value="bsas">Buenos Aires</option>
            <option value="tdelf">Tierra del Fuego</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="codpos">C.P.</label>
          <input type="text" class="form-control <?php echo ($nocodpos!='') ?  'is-invalid':''; ?>" id="codpos" name="codpos" placeholder="ingrese C.P">
          <div class="invalid-feedback">

            <?php echo $nocodpos; ?>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-light">Enviar :)</button>
    </form>
    </div>











<?php include("footer.php") ?>
