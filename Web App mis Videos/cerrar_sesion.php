<?php	
	session_start();
$_SESSION['id_usuario']="";
	session_unset();
	
	

	header('location: index.php');

?>