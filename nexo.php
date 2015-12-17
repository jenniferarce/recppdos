<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/mascota.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'mostrarlogin':
			include("partes/formIngreso.php");
		break;
	case 'mostrarregistro':
			include("partes/formRegistro.php");
		break;
	case 'mostrarMascotas':
			include("partes/grillaMascotas.php");
		break;
	case 'BorrarMascota':
			$mascota = new mascota();
			$mascota->id=$_POST['id'];
			$cantidad=$mascota->BorrarMascota();
			echo $cantidad;
	break;
	case 'GuardarMascota':
			$mascota = new mascota();
			$mascota->id=$_POST['id'];
			$mascota->nombre=$_POST['nombre'];
			$mascota->clase=$_POST['clase'];
			$mascota->clave=$_POST['clave'];
			$mascota->tipo=$_POST['tipo'];
			$cantidad=$mascota->GuardarMascota();
			echo $cantidad;
	break;
	case 'EditarMascota':
		include("partes/formMiMascota.php");
	break;
	case 'TraerMascotas':
			$mascota=mascota::TraerMascotas();	
			echo json_encode($mascota) ;
	break;
	case 'TraerMascotasId':
		$mascota = mascota::TraerMascotasId($_POST['id']);	
		echo json_encode($mascota);
	break;
	case 'mostrarBotones':
			include("partes/botonesABM.php");
		break;
	default:
		# code...
		break;
}

 ?>