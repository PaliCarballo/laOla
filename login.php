<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/logyregistro.css">
    <title>La Ola - login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/logyregistro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

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
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mail"
    name="email">
  </div>
  <div class="form-group">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="pass">
  </div>

  <button type="submit" class="btn btn-outline-light">Enviar :)</button>
</form>
</div>





<?php
include("footer.php") ?>

  </body>
</html>
