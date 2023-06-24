<?php 
	if(!empty($_POST["submit_R"])){
		if (empty($_POST["nombre_R"]) or empty($_POST["contrasena_R"]) or empty($_POST["apellido_R"]) or empty($_POST["correo_R"]) or empty($_POST["usuario"]) or empty($_POST["fecha"])) {
			echo "Los campos estan vacios";
		} 
		else {
			$nombre = $_POST["nombre_R"];
			$apellido = $_POST["apellido_R"];
			$correo = $_POST["correo_R"]; 
			$usuario = $_POST["usuario"];
			$contrasena = $_POST["contrasena_R"];
			$fecha = $_POST["fecha"];
			$sql = $conexion->query(" insert into usuario (nombre,nombre_usuario,contrasenia, apellido, correo,fecha_nacimiento) values('$nombre','$usuario','$contrasena','$apellido','$correo','$fecha')");
			if($sql == 1){
				header("location:inicio.php");
			}
			else{
				echo "Acceso denegado";
			}
		}
		
	}	

?>