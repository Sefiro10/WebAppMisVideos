<?php
session_start();
	include_once '../database/conexion.php';
if(!empty($_POST)){	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
		
	$db = new Database();
	$conexion = $db->connect();
 		 	$query= $conexion->prepare("Insert INTO usuarios (nombre,apellido,usuario,password) values (:nombre,:apellido,:usuario,:pass)");
		try{
			$datos = $query -> execute(['nombre'=>$nombre,'apellido'=>$apellido,'usuario'=>$usuario,'pass'=>$pass]);
			if($datos){
				echo "<script>
				alert('usuario agregado');
				window.location= '../index.php'
				</script>";
			}else{
				echo "<script>
				alert('error al añadir usuario');
				window.location= '../index.php'
				</script>";
			}
		}catch(Exception $e){
			echo "<script>
				alert('error al subir video');
				window.location= '../index.php'
				</script>";
		}
		}else{echo "<script>
				alert('post vacio');
				window.location= '../index.php'
				</script>";
	
}



?>