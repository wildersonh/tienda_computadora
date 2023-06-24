<?php 
	if(!empty($_POST["submit"])){
		if (empty($_POST["usuario"]) and empty($_POST["contrasena"])) {
			echo "Los campos estan vacios";
		} else {
			$usuario = $_POST["usuario"];
			$contrasena = $_POST["contrasena"];
			$sql = $conexion->query(" select * from usuario where nombre_usuario = '$usuario' and contrasenia = '$contrasena'");
			if($dato = $sql->fetch_object()){
				header("location:inicio.php");
			}
			else{
				echo "Acceso denegado";
			}
		}
		
	}	
 ?>