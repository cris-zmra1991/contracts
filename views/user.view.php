<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="res/panel.css">
	<link rel="stylesheet" href="res/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="res/fontawesome/css/solid.min.css">
</head>
<body>
	<div class="main-nav">
		<div class="first-group">
			<span class="icon"><i class="fa-solid fa-edit fa-lg"></i></span> 
			<div class="menu-item"><a href="#">Inicio</a></div>
			<div class="menu-item"><a href="http://localhost:8030/Contracts/list">Listado</a></div>
			<div class="menu-item"><a href="#">Añadir</a></div>
			<div class="menu-item"><a href="#">Actualizar</a></div>
			<div class="menu-item"><a href="#">Nomencladores</a></div>
		</div>
		<div class="first-group">
			<div class="menu-item"><a href="http://localhost:8030/Contracts/log-out"><i class="fa-solid fa-sign-out"></i></a></div>
		</div>
	</div>

	<!-- COMIENZO DEL DASHBOARD -->
	<div class="card-container">
	<div class="card">
		<div class="card-icon-ochre"><i class="fa-solid fa-edit fa-2xl"></i></div>
    	<div class="card-text">Prueba</div>
    	<div class="card-text1">Cantidad de servicios recibidos</div>
	</div>
	<div class="card">
		<div class="card-icon-green"><i class="fa-solid fa-edit fa-2xl"></i></div>
		<div class="card-text">Prueba</div>
    <div class="card-text1">Cantidad de servicios aprobados</div>
	</div>
	<div class="card">
		<div class="card-icon-red"><i class="fa-solid fa-edit fa-2xl"></i></div>
		<div class="card-text">Prueba</div>
    <div class="card-text1">Cantidad de servicios rechazados</div>
	</div>
	<div class="card">
		<div class="card-icon-ochre"><i class="fa-solid fa-edit fa-2xl"></i></div>
		<div class="card-text">Prueba</div>
    <div class="card-text1">Cantidad de servicios activos</div>
	</div>
	</div>
	<div class="card-container">
	<div class="card-alert">
		<div class="card-icon-alert">
			Aqui va el encabezado de la notificacion de contratos proximos a vencerse
		</div>
		<div class="card-text-alert">
			Aqui va la tabla con los contratos proximos a vencerse
		</div>
	</div>
	</div>
</body>
</html>
