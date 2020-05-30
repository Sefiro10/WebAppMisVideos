<?php 
	session_start();
	include_once '../model/login_model.php';	
	

	// VERIFICAMOS NO RECIBIR CAMPOS CON VALOR NULL
	if(isset($_POST['rpe'])&& isset($_POST['contrasena']))
	{
		$rpe=$_POST['rpe'];
		$contrasena=$_POST['contrasena'];
		$obj = new login(); //instancia de la clase model_login
		$row = $obj->select($_POST['rpe'],$contrasena);
		if($row){
			$rol=$row[7];
			$rpe=$row[1];
			$zona=$row[5];
		 	$_SESSION['rol']=$rol;
 			$_SESSION['rpe']=$rpe;
 			$_SESSION['zona']=$zona; 	
		 	
		 	switch ($_SESSION['rol']) // CASO 1 DIST, CASO 2 JURID, CASO 3 ADMIN
		 	{
		 		case 1:
			 		 header('location: ../controller/distribucion/hecho_inicial_controller.php');
			 		break;
			 	case 2:
			 		 header('location: ../controller/juridico/hecho_inicial_controller.php');
			 		break;	
			 	case 3:
			 		 header('location: ../controller/administrador/hecho_inicial_controller.php');
			 		break;
			 	default:	
			 	header('location: ../index.php');
			}
		}
		else
		{
			session_unset();
			session_destroy(); 	
			header('location: ../index.php?res=error');

		
		}
		
		

		
	}
	else
	{
		header('location: ../index.php?res=error');
	}



	

 ?>