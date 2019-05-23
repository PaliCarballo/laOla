<html>

<?php
      session_start();
      include("nav.php");

      require_once('conexion.php');
      require_once('clases/Usuario.php');

  $mensaje = '';

    if(isset($_POST['modificar'])){

      $sql = 'UPDATE usuarios
       SET nombre = :nombre, apellido = :apellido, email = :email, fecha_nacimiento = :fechaNac, nacionalidad_id = :nacion, password = :pass, dni = :dni, avatar = :avatar
       WHERE id = :usuario_id';
       $query = $conex->prepare($sql);
       $query->bindValue(':nombre', $_POST['nombre']);
       $query->bindValue(':apellido', $_POST['apellido']);
       $query->bindValue(':email', $_POST['email']);
       $query->bindValue(':fechaNac', $_POST['fechaNac']);
       $query->bindValue(':nacion', $_POST['nacion']);
       $query->bindValue(':pass', $_POST['pass']);
       $query->bindValue(':dni', $_POST['dni']);
       $query->bindValue(':avatar', $_POST['avatar'] );
       $query->execute();
       $mensaje = 'Perfil Modificado Exitosamente';
     }




  $query = $conex->prepare('SELECT * FROM usuarios WHERE id = :id');
  $query->bindValue(':id', $_SESSION['id']);
  $query->execute();
  $resultado = $query->fetch(PDO::FETCH_ASSOC);


 ?>


 <section class="editarDatosUsuario">
     <article class="editPerfil" id="usuariosPerfil">
         <div class="editDatos">




      <form method="post" action="pruebaOla.php?id=<?= $_SESSION['id'] ?>">
        <input type="hidden" name="usuario_id" value="<?=$_SESSION['id']?>">
          <div class="form-group">
            <div>
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?= $resultado['nombre']?>"/>
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="<?= $resultado['apellido']?>"/>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $resultado['email']?>"/>
            </div>
            <div>
                <label for="fechaNac">Fecha de nacimiento</label>
                <input type="date" name="fechaNac" id="fechaNac" value="<?= $resultado['fecha_nacimiento']?>"/>
            </div>

            <div>
                <label for="nacion">Nacionalidad</label>
                <input type="text" name="nacion" id="nacion" value="<?= $resultado['nacionalidad_id']?>"/>
            </div>
            <div>
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" value="<?= $resultado['password']?>"/>
            </div>
            <div>
                <label for="dni">DNI</label>
                <input type="number" name="dni" id="dni" value="<?= $resultado['dni']?>"/>
            </div>
            <div>
                <label for="avatar">Foto de usuario</label>
                <input type="file" name="avatar" id="avatar" value="<?= $resultado['avatar']?>"/>
            </div>

            
              <?= $mensaje ?>

            <input class="btn btn-primary" type="submit" value="Modificar Perfil" name="modificar"/>


        </form>

      </article>
  </section>

 <?php include("footer.php") ?>
