<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contracts - Login</title>
	<link rel="stylesheet" href="res/login.min.css">
	<link rel="stylesheet" href="res/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="res/fontawesome/css/solid.min.css">
</head>
<body>
	<div class="container">
		<div class="login">
			<div class="login-title">
				<div class="titulo-cont">
				<span class="titulo"><i class="fa-solid fa-user"></i>&nbsp;Login</span><br>
				<span class="subtitulo">(Control de contratos)</span>
				</div>
			</div>
			<div class="login-content">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<label class="label">Usuario o correo electrónico:</label>
					<input class="form-control mt-2" name="user">
					<br>
					<label class="label">Contraseña:</label>
					<input class="form-control mt-2" name="password">
				  <button class="btn-login mt-4" type="submit"><span>Acceder</span></button>
			  </form>
			  <span class="errores">
			  <?php
          echo $errores;
			  ?>
			  </span>
			</div>
		</div>
	</div>
</body>
</html>