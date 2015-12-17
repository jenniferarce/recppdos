<link href="css/ingreso.css" rel="stylesheet"> 

<?php 
 
session_start();
if(isset($_SESSION['registrado'])){  ?>
    <div id="formMiMascota" class="container">
      <form class="form-ingreso" onsubmit="GuardarMascota();returnfalse;">
        <h2 class="form-ingreso-heading">Mi mascota</h2>
          <input type="text" id="nombre" name="nombre" class="form-control" title="Ingrese un nombre" placeholder="Nombre" required autofocus><br>
           <br>
           <select id="clase" name="clase" class="form-control" readonly disabled="disabled" required> <!-- no se tiene que modificar -->
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
          </select>
          <br>
          <input type="text" id="clave" name="clave" class="form-control" title="Ingrese una contraseña" placeholder="Contraseña" required><br>
          <select id="tipo" name="tipo" class="form-control" title="Elija el tipo de mascota" optional>
            <option value=null></option>
            <option value="Mascota">Mascota</option>
            <option value="Guardian">Guardian</option>
          </select>
          <br>
          <input readonly   type="hidden"    id="id" class="form-control" >
          <button class="btn btn-lg btn-success btn-block" type="submit"> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</button>
      </form>

    </div> <!-- /container -->

  <?php }
  else{ echo "<h4 class='widgettitle'>Usted no esta logueado.</h4>";}

   ?>