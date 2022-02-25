<?php session_start();
define('RUTA', 'http://localhost:8030/Contracts/');
require 'medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mysql',
  	'host' => 'localhost',
  	'database' => 'contratos',
  	'username' => 'root',
  	'password' => '',
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos";
}
?>
