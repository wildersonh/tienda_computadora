<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<link rel="stylesheet" href="css/registrar.css">
</head>
<body>
	<section id="login">
		<div id="contenedor_padre_R">
			<div id="contenedor_hijo_R">
				<h1>Bienvenido</h1>
				<?php 
					include("conexion_db.php");
					include("controlador_registrar.php");	
				?>
				<FORM action = "Registrar.php" method  = "POST">
				  	<input type="text" name="nombre_R" placeholder = "Nombre" class="frm_i">
				  	<input type="text" name="apellido_R" placeholder="Apellido" class="frm_i">
				  	<input type="email" name="correo_R" placeholder="Correo" class="frm_i">
				  	<input type="text" name="usuario" placeholder="Nombre de usuario" class="frm_i">
					<center>
						<input type="password" name="contrasena_R" placeholder="Contraseña" class="frm_i">
						<br>
						<h3>fecha Nacimiento </h3>
						<input type="date" name="fecha">
						<br>
						<input type="submit" name="submit_R" value="Enviar" class="boton_1">
					</center>
				</FORM>	
				<br>
				<center>
					<a href="index.html">Volver</a>
				</center>
			</div>
		</div>
	</section>
	<footer>
		 Derechos de autor Wilderson Hernadez &copy; 2022-2023   
	</footer>
</body>
</html>