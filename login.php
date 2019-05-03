<?php
  session_start();
  include("nav.php");

 ?>
 <?php
 $nomail = "";
 $nopass = "";


 if($_POST){

   $email = $_POST["email"];

   $pass = $_POST["password"];

   $usuario = file_get_contents("datos.json");

   $datosjson = json_decode($usuario,true);


   $emailRegistrado= $datosjson["email"];
   $contrasenaRegistrada=$datosjson["password"];
   if(password_verify($pass,$contrasenaRegistrada)&&$email=$emailRegistrado){

     header("Location:index.php?usuario=".$_POST['email']);

   }else{
     header("Location:login.php");
   }
 }


?>

 <div class="log">
   <h2>Logueate</h2>
    <form action="" method="post">
      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" class="form-control " id="email" aria-describedby="emailHelp" placeholder="Ingresá tu email" name="email">
      </div>
      <div class="form-row">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
      </div>
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="recordar">
  <label class="form-check-label" for="defaultCheck1">
    Recuérdame
  </label>

</div>
      <button type="submit" class="btn btn-outline-light">Enviar :)</button>
    </form>
  </div>

<?php include("footer.php") ?>
