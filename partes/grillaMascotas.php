<?php 
//REVISAR
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/mascota.php");
	$arrayMascotas=mascota::TraerMascotas();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Nombre</th><th>Clase</th><th>Clave</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
foreach ($arrayMascotas as $mascota) {
	echo"<tr>
			<td><a onclick='EditarMascota($mascota->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarMascota($mascota->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>
			<td>$mascota->nombre</td>
			<td>$mascota->clase</td>
			<td>$mascota->clave</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>Usted no esta logueado.</h4>";
	}

	 ?>