<?php 
session_start();
require_once("../clases/AccesoDatos.php");
require_once("../clases/mascota.php");
$nombre=$_POST['nombre'];
$clase=$_POST['clase'];
$clave=$_POST['clave'];
$datos="$nombre, $clase, $clave"; //VER

$retorno;
if(mascota::validarMascota($_POST['nombre'],$_POST['clase'],$_POST['clave']))
{
	setcookie("datos",$datos);
	$_SESSION['registrado']=$nombre;

	//echo $_COOKIE['datos']; //VER
	$retorno=$nombre;
}
else
{
		$retorno= "No-esta"; 
}
echo $retorno;

?>