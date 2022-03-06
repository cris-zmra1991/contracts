<?php 
require 'config/init.php';
// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar que no este repetido
  $data = $database->count("users",["username" => $_SESSION['usuario']]);

  if ($data == '1') {
    header('Location: '.RUTA.'config/validate.php');
    }
  elseif ($data > '1') {
    header('Location: '.RUTA.'log-in');
    }
}else {
header('Location: '.RUTA.'log-in');
}
?>