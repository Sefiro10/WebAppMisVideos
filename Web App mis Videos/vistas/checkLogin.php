<?php 
	session_start();
	include_once '../database/conexion.php';	
	

	// VERIFICAMOS NO RECIBIR CAMPOS CON VALOR NULL
	if(isset($_POST['usuario'])&& isset($_POST['contrasena']))
	{
		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		
		$row = select($_POST['usuario'],$contrasena);
		if($row){
			
			$usuario=$row[0];
			
			$_SESSION['id_usuario']=$usuario;
 			
		 	 		 header('location: ../index.php');
					}
		else
		{
			session_unset();
			session_destroy(); 	
			header('location: ../login.php?res=error');

		
		}
		
		

		
	}
	else
	{
		header('location: ../login.php?res=error');
	}
function select($usuario,$contrasena){
			
			$db = new Database();
 		 	$query = $db->connect()->prepare("SELECT * FROM usuarios where usuario = :usuario and password = :contrasena");
			$query -> execute(['usuario'=>$usuario,'contrasena'=>$contrasena]);
			return $query->fetch(PDO::FETCH_NUM);
		}



	

 ?>