<?php
session_start();
	include_once '../database/conexion.php';
if(!empty($_POST)){
	$id = $_SESSION['id_usuario'];
	$nombre_video=$_POST['nombre_video'];
	$rate=$_POST['rate'];
	$rs=$_POST['rs'];
	$archivo="fondo.jpg";
	$link=$_POST['link'];	
	$db = new Database();
	$conexion = $db->connect();
 		 	$query= $conexion->prepare("Insert INTO videos (id_usuario,nombre,rate,rs,video_archivo,link) values (:id,:nombre,:rate,:rs,:video,:link)");
		try{
			$datos = $query -> execute(['id'=>$id,'nombre'=>$nombre_video,'rate'=>$rate,'rs'=>$rs,'video'=>$archivo,'link'=>$link]);
			if($datos){
				echo "<script>
				alert('video agregado');
				window.location= '../index.php'
				</script>";
			}else{
				echo "<script>
				alert('error al subir video'); 
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