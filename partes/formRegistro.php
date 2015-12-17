<link href="css/ingreso.css" rel="stylesheet"> 

<?php 
 
session_start();
if(!isset($_SESSION['registrado'])){  ?>
    <div id="formRegistro" class="container">
      <form class="form-ingreso" onsubmit="GuardarMascota();returnfalse;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
          <input type="text" id="nombre" name="nombre" class="form-control" title="Ingrese un nombre" placeholder="Nombre" required autofocus><br>
           <br>
           <select id="clase" name="clase" class="form-control" title="Elija la clase de mascota" required>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
          </select>
          <br>
          <input type="text" id="clave" name="clave" class="form-control" title="Ingrese una contraseña" placeholder="Contraseña" required><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted '".$_SESSION['registrado']."' esta logeado, no puede registrarse. </h3>";?>         
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 <script type="text/javascript">
 </script>
<?php  

} ?>