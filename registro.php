<?php
      require('conexion.php');
      include('nav.php');
      require_once('clases/Usuario.php');



      if (!empty($_SESSION['email']))
       {
        header("Location:index.php?usuario=".$_POST['email']);
    }

      $errores = 0;
      $todosLosErrores = [];
      $noname = '';
      $nomail = '';
      $nopass = '';
      $errorAvatar='';
      $nombre = '';
      $email = '';
      $yaregistrado='';


      if ($_POST)
      {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        //validacion de Nombre

        if ($_POST['nombre'] == '')
        {
          $noname = 'Completa tu nombre por favor.';
          $errores++;
          $todosLosErrores[] = 'Completa tu nombre por favor.';
        }
        else if(strlen($_POST['nombre']) < 4 )
        {
          $noname = 'su nombre debe tener como minimo cuatro caracteres';
          $errores++;
          $todosLosErrores[] = 'su nombre debe tener como minimo dos caracteres.';
        }
/*validacion mail*/

        if ($_POST['email'] == '')
         {
            $nomail = 'ingrese mail válido';
            $errores++;
            $todosLosErrores[] = 'ingrese mail válido.';
        }
        else if (!filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
          $nomail = 'ingrese formato válido de email';
          $errores++;
          $todosLosErrores[] = 'ingrese formato válido de email.';
        }else{

          $validator = $conex->prepare("SELECT * FROM usuarios  WHERE email =:email");
          $validator->bindValue(':email', $email);
          $validator->execute();
          $cantidad = $validator->rowCount();
          $usuarioBD = $validator->fetch(PDO::FETCH_ASSOC);

          if ($cantidad == 1) {
            $nomail = 'Mail ya registrado';
            $errores++;
            $todosLosErrores[] = 'Mail ya registrado';
          }

        }
/*validacion pass*/

        if ($_POST['password'] == '')
        {
            $nopass = 'contraseña invalida';
            $errores++;
            $todosLosErrores[] = 'contraseña invalida.';
        }
        else if(strlen($_POST['password']) < 4 )
        {
          $nopass = 'la contraseña debe tener 4 caracteres como mínimo';
          $errores++;
          $todosLosErrores[] = 'la contraseña debe tener 4 caracteres como mínimo.';
        }
        elseif ($_POST['password']!==$_POST['confPassword'])
        {
            $nopass = "las contraseñas no son idénticas";
            $errores++;
            $todosLosErrores[]="las contraseñas no son idénticas.";
        }



        if(count($todosLosErrores) == 0){

              $avatar='';
              //var_dump($_FILES); exit;
              if($_FILES['avatar']['error']===UPLOAD_ERR_OK)
              {
                $tipoImagen = $_FILES['avatar']['type'];
              if( $tipoImagen == 'image/png' || $tipoImagen == 'image/jpg' || $tipoImagen == 'image/jpeg' || $tipoImagen == 'image/gif'){
                $ext = pathinfo($_FILES['avatar']['name'],  PATHINFO_EXTENSION);
                $avatar = 'avatars/' . $_POST['email'] . '.' . $ext;
                      move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);
                  }
                  else
                  {
                    $errorAvatar = 'Seleccione una imagen con formato valido';
                    $errores++;
                    $todosLosErrores[] ='Seleccione una imagen con formato valido';
                  }
              }
              if(count($todosLosErrores) == 0)
              {
                  //  $usuario = new Usuario($_POST['email'], $pass, $avatar);
                $query=$conex->prepare('INSERT INTO usuarios (nombre,email,password,avatar)
                VALUES (:nombre,:email,:password,:avatar)');
                $query->bindValue(':nombre',$_POST['nombre']);
                $query->bindValue(':email',$_POST['email']);
                $query->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
                $query->bindValue(':avatar',$avatar);
                $query->execute();
              }
              header('location:login.php');

            }


            }



     ?>

  <div class="log">
    <h2>Registrate</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre y Apellido</label>
            <input id="nombre" type="text" class="form-control <?php echo ($noname != "") ? 'is-invalid':""; ?>" name="nombre" value="<?php echo $nombre ?>">
            <div class="invalid-feedback"><?php echo $noname; ?></div>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control <?php echo ($nomail != '') ? 'is-invalid':''; ?>" name="email" value="<?php echo $email ?>">
            <div class="invalid-feedback"><?php echo $nomail; ?>
          <?php echo $yaregistrado; ?>  </div>
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
          <div class="col-md-6">
            <label for="avatar">Foto de perfil</label>
            <input id="avatar" type="file" name="avatar" value=""><?= $errorAvatar?>
          </div>
          <button type="submit" class="btn btn-outline-light">Enviar :)</button>
        </div>
    </form>

  </div>











<?php include("footer.php") ?>
