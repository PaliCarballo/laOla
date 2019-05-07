<?php
  session_start();
  include("nav.php");
  require_once('clases/Usuario.php');

 ?>
 <?php
 $nomail = "";
 $nopass = "";
 $recordar ="";
 $email = "";

  if($_POST)
  {
     $email = $_POST["email"];
     $pass = $_POST["password"];

     $usuario = file_get_contents("datos.json");
     $datosjson = json_decode($usuario,true);
     $emailRegistrado = $datosjson["email"];
     $contrasenaRegistrada = $datosjson["password"];

    if (password_verify($pass,$contrasenaRegistrada) &&
       $email == $emailRegistrado)
    {
      header("Location:index.php?usuario=".$_POST['email']);
      $_SESSION['email'] = $emailRegistrado;
      $_SESSION['pass'] = $contrasenaRegistrada;
    } else{
      $nopass = 'contraseña o usuario inválidos';
    }

  }

  if (isset($_POST['recordar'])) {
    setcookie(email,$_POST['email'], time() + 60*60*24);
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
