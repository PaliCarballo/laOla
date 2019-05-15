<?php
  session_start();
  require('conexion.php');
  include("nav.php");
  require_once('clases/Usuario.php');




  $nomail = "";
  $nopass = "";
  $recordar ="";
  $email = "";

  if($_POST){



//pappapap

      $email = $_POST['email'];
      $validator = $conex->prepare("SELECT * FROM usuarios  WHERE email ='{$email}'");
      $validator->execute();
      $cantidad = $validator->rowCount();

      //echo var_dump($cantidad);exit;

      if($cantidad==0){


            $nomail = 'contraseña o usuario inválidos';
      } else {


            $usuarioBD = $validator->fetch(PDO::FETCH_ASSOC);

          if(password_verify($_POST['password'],$usuarioBD['password'])){


              header("Location:index.php?usuario=".$_POST['email']);

              $_SESSION['email'] = $_POST['email'];
              $_SESSION['password'] = $usuarioBD['password'];
          }
          else{
              $nopass = 'contraseña o usuario inválidos';
          }if (isset($_POST['recordar'])) {
            setcookie(email,$email);
          }
      }


  }





 ?>


 <div class="log">
   <h2>Logueate</h2>
    <form class="login" action="" method="post">
      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder= "Ingresá tu email" name="email" <?php if (isset($_COOKIE['email'])) {
           echo "value='{$_COOKIE['email']}'";
        } ?>>
      </div>
      <div class="form-row">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control <?php echo ($nopass!='') ?  'is-invalid':''; ?>" id="password" placeholder="Contraseña" name="password">
        <div class="invalid-feedback"><?php echo $nopass; ?></div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="recordar">
        <label class="form-check-label" for="defaultCheck1">Recuérdame</label>
      </div>
      <button type="submit" class="btn btn-outline-light">Enviar :)</button>

    </form>
  </div>

<?php include("footer.php") ?>
