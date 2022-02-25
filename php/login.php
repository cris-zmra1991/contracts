<?php 
require '../config/init.php';
$errores = "";
if (isset($_SESSION['usuario'])) {
	header('Location: '.RUTA.'index.php');
}
else{
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    //validar que el usuario no esta duplicado
    $valid = $database->count("users",["username" => $usuario]);
    if($valid == '1'){
    	//Extrae los datos del usuario
    	$datosusuario = $database->select("users","*",["username" => $usuario]);
    	foreach ($datosusuario as $sesion) {
    		$_SESSION['usuario'] = $sesion["username"];
    		$_SESSION['firstname'] = $sesion["user_first_name"];
    		$_SESSION['secondname'] = $sesion["user_second_name"];
    		$_SESSION['lastname'] = $sesion["user_last_name"];
    		$_SESSION['lastname2'] = $sesion["user_last_name2"];
    		$_SESSION['email'] = $sesion["user_email"];
    		$_SESSION['rol'] = $sesion["user_role"];
    		$_SESSION['errores'] = $sesion["errores"];

    		$bdpassword = $sesion["user_password"];
    	}

    	if($password != $bdpassword){
    		$errores = "** Contraseña incorrecta **";
    	}
    	else{
            $database->update("users",["user_active_status" => "1"],["username" => $_SESSION['usuario']]);
    		header('Location: '.RUTA.'index.php');
    	}
    }
    else{
    	$errores = "** Usuario duplicado o inexistente **";
    }
}
}
require_once '../views/login.view.php';
?>