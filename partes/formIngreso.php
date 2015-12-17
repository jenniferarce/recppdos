<link href="css/ingreso.css" rel="stylesheet">

<?php 
 
session_start();
if(!isset($_SESSION['registrado'])){  ?>
    <div id="formLogin" class="container">

      <form class="form-ingreso" onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese su cuenta</h2>
          <input type="text" id="nombre" name="nombre" class="form-control" title="Ingrese su nombre" placeholder="Nombre" required autofocus>
          <br>
          <select id="clase" name="clase" class="form-control" title="Elija la clase de mascota" required>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
          </select>
          <br>
          <input type="password" id="clave" name="clave" class="form-control" title="Ingrese su contraseña" placeholder="Clave" required>
          <select id="tipo" name="tipo" class="form-control" title="Elija el tipo de mascota" optional>
            <option value=null></option>
            <option value="Mascota">Mascota</option>
            <option value="Guardian">Guardian</option>
          </select>
          <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 <script type="text/javascript">
 </script>
<?php  

} ?>