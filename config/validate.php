<?php 
require 'init.php';
if (isset($_SESSION['usuario'])) {
	//cargar el rol del usuario a validar
	$data = $database->select("users",["user_role"],["username" => $_SESSION['usuario']]);
	foreach($data as $rol){
		$user = $rol["user_role"];
		if($user == 'Administrador'){
			header('Location: '.RUTA.'admin');
		}
		elseif ($user == 'Usuario') {
			header('Location: '.RUTA.'user');
		}
	}
}
else{
	header('Location: '.RUTA.'login');
}
?>