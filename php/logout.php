<?php
session_start();

$_SESSION['registrado'] = NULL;
session_destroy();

if (isset($_COOKIE['datos'])) 
{
	unset($_COOKIE['datos']);
	setcookie('datos', null);
}

header('location:../index.php');

?>