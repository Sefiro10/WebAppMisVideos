<?php 
	include_once '../database/conexion.php';
			
	class login{

		function select($rpe,$contrasena){
			$db = new Database();
 		 	$query = $db->connect()->prepare("SELECT * FROM Usuario where rpe_usuario = :rpe and contrasena_usuario = :contrasena");
			$query -> execute(['rpe'=>$rpe,'contrasena'=>$contrasena]);
			return $query->fetch(PDO::FETCH_NUM);
		}



	}



 ?>