<?php include("nav.php");

/*if ($_POST) {

$mail= $_POST['email'];
$password = $_POST['password'];
$usuarios = file_get_contents('ARCHIVO DONDE GUARDAMOS LOS DATOS');
$logusuario = json_decode($usuarioss,true);

var_dump($logusuario);

$mailreg = $logusuario["email"];
$passreg = $logusuario["password"];
if (password_verify($password, $passreg) && $mail == $passreg) {
   echo "Bienveido {$logusuario['nombre']}";
   $_SESSION['mailsreg'] = $mailreg;
   $_SESSION['nombre'] = $logusuario;
   header("Location:home.php");

} else {
  echo "usuario y/o Contraseña incorrecta";
};

}
*/
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

     header("Location:index.php?".$_POST["email"]);exit;

   }
 }
?>

 <div class="log">
    <form action="" method="post">
  <div class="form-log">
      <label for="email">Email</label>
    <input type="email" class="form-control " id="email" aria-describedby="emailHelp" placeholder="Ingresá tu email"
    name="email">
  </div>
  <div class="form-log">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">


  </div>

  <button type="submit" class="btn btn-outline-light">Enviar :)</button>
</form>
</div>

<?php include("footer.php") ?>
