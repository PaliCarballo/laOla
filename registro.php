<?php
      session_start();
      include("nav.php");
      require_once 'clases/Usuario.php';

      //si hay alguien logueado que vaya a home
      if (!empty($_SESSION['nombre'])) {
        header('location:index.php');
      }

      $errores = 0;
      $todosLosErrores = [];

      $noname = "";
      $nomail = "";
      $nopass = "";

      if ($_POST){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usuario["nombre"]=$nombre;
        $usuario["email"]=$email;
        $usuario["password"]=$pass;

        // instancio el usuario
        $usuario = new Usuario($_POST['nombre'], $email, $pass);
        $usuarioJson= json_encode($usuario);

        // guardar en el json
        file_put_contents('usuarios.json', $usuarioJson);
        $_SESSION['nombre'] = $usuario->getNombre();
      //  $_SESSION['avatar'] = $usuario->getAvatar();

        // ir al home del usuario
        header('location:index.php');

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



        /* require_once ('cliente.php');

        if ($_POST) {
        $clienteNuevo = fann_get_network_type
            Cliente ($_POST['nombre'], $_POST['apellido']);

            var_dump($clienteNuevo);

            $errorDni = $clienteNuevo->getDni( == null ? 'cargar nuevo dni' : '');*/
      }
     ?>

  <div class="log">
    <h2>Registrate</h2>
    <form action="" method="POST" enctype="mmultipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre y Apellido</label>
            <input type="text" class="form-control <?php echo ($noname!='') ?  'is-invalid':''; ?>" id="nombre" placeholder="" name="nombre">
            <div class="invalid-feedback"><?php echo $noname; ?></div>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control <?php echo ($nomail!='') ?  'is-invalid':''; ?>"id="email" placeholder="" name="email">
            <div class="invalid-feedback"><?php echo $nomail; ?></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control <?php echo ($nopass!='') ?  'is-invalid':''; ?>" id="password" placeholder="" name="password">
            <div class="invalid-feedback"><?php echo $nopass; ?></div>
          </div>
          <div class="form-group col-md-6">
            <label for="confPassword">Confirmar contraseña</label>
            <input type="password" class="form-control <?php echo ($nopass!='') ?  'is-invalid':''; ?>" id="confPassword" placeholder="" name="confPassword">
            <div class="invalid-feedback"><?php echo $nopass; ?></div>
          </div>
        </div>
        <button type="submit" class="btn btn-outline-light">Enviar :)</button>
    </form>

  </div>











<?php include("footer.php") ?>
