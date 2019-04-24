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



 <div class="log">
    <form action="index.php" method="get">
  <div class="form-log">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresá tu email"
    name="email">
  </div>
  <div class="form-log">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
  </div>

  <button type="submit" class="btn btn-outline-light">Enviar :)</button>
</form>
</div>

<?php include("footer.php") ?>

