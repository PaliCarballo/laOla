<?php
      session_start();
      include('nav.php');
      require_once('clases/Usuario.php');

 ?>

 <form>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputNombre">Nombre y Apellido</label>
       <input type="text" class="form-control" id="inputEmail4" placeholder="Cosme Fulanito" name="nombre">
     </div>
     <div class="form-group col-md-6">
       <label for="inputEmail4">Email</label>
       <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Contraseña</label>
       <input type="password" class="form-control" id="inputPassword4" placeholder="contraseña" name="pass">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Confirmar contraseña</label>
       <input type="password" class="form-control" id="inputPassword4" placeholder="" name="pass2">
     </div>
     <div class="form-group col-md-6">
       <label for="inputTelefono">Telefono</label>
       <input type="text" class="form-control" id="inputEmail4" placeholder="" name="telefono">
     </div>
     <div class="form-group">
       <label for="inputAddress">Direccion</label>
       <input type="text" class="form-control" id="inputAddress" placeholder="Calle Falsa 1234" name="direccion">
     </div>
     <div class="form-group col-md-2">
       <label for="inputDire2">depto, piso, etc.</label>
       <input type="text" class="form-control" id="inputZip" name="dire2">
     </div>
   </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputCity">Ciudad</label>
       <input type="text" class="form-control" id="inputCity" name="ciudad">
     </div>
     <div class="form-group col-md-4">
       <label for="inputState">Localidad</label>
       <select id="inputState" class="form-control" name="localidad">
         <option selected>Eligiendo...</option>
         <option>CABA</option>
         <option>GBA</option>
       </select>
     </div>
     <div class="form-group col-md-2">
       <label for="inputZip">C.P.</label>
       <input type="text" class="form-control" id="inputZip" name="codPost">
     </div>
   </div>

   <button type="submit" class="btn btn-dark">Guardar cambios</button>
 </form>


 <?php include("footer.php") ?>
