<!DOCTYPE html>


<?php
	/* ejemplo de otro video
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$nombre = $_POST["usuario"];
		$contrasena = $_POST["contrasena"];
		if(($nombre == "Wilderson") && ($contrasena == "123456")){
			header('Location:inicio.php');
		}
		else{
			echo "<center> no vale usted es rolo de marico ".$nombre." </center>";
		}
	}
	*/
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
	<meta charset="utf-8">
</head>
<body>
	<section id="login">
		<div id="contenedor_padre">
			<img src="img/pc.png">
			<div id="contenedor_hijo">
				<h1>Bienvenido</h1>
				<?php 
					include("conexion_db.php");
					include("controlador.php");	
				?>
				<FORM action = "login.php" method  = "POST">
				  	<input type="text" name="usuario" placeholder = "Usuario" class="frm_i">
				  	<br>
					<input type="password" name="contrasena" placeholder="Contraseña" class="frm_i">
					<br>
					<input type="submit" name="submit" value="Enviar" class="boton_1">
				</FORM>	
				<br><br><br>
				<a href="index.html">Volver</a>
			</div>	
		</div>
	</section>
	<footer>
		 Derechos de autor Wilderson Hernadez &copy; 2022-2023   
	</footer>
</body>
</html>