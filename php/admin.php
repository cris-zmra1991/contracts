<?php 
require '../config/init.php';
if (isset($_SESSION['usuario'])) {
	require_once '../views/admin.view.php';
}
else{
	header('Location: '.RUTA.'index.php');
	}
 ?>


