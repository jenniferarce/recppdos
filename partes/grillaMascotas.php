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
			<th>Borrar</th><th>Nombre</th><th>Clase</th><th>Clave</th><th>Tipo</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
foreach ($arrayMascotas as $mascota) {
	echo"<tr>
			<td>";if($mascota->tipo=='Guardian'){echo"<a onclick='BorrarMascota($mascota->id)' class='btn btn-danger'><span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a>";}echo"</td>
			<td>$mascota->nombre</td>
			<td>$mascota->clase</td>
			<td>$mascota->clave</td>
			<td>$mascota->tipo</td>
		</tr>";
} 
		 ?> 
		 <!-- <td><a onclick='EditarMascota($mascota->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td> -->
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>Usted no esta logueado.</h4>";
	}

	 ?>