<?php 
require 'init.php';
$database->update("users",["user_active_status" => "0"],["username" => $_SESSION['usuario']]);
session_destroy();
header('Location: '.RUTA.'index.php');
?>