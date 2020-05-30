<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet"  href="resources/css/css/all.min.css">
	
</head>
	

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">YouTube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<?php	?>
		<?php session_start();
				if(isset($_SESSION['id_usuario'])){
					if($_SESSION['id_usuario']!=""){
						
					
					?>
		<li class="nav-item active">
        <a class="nav-link" href="vistas/formulario_video.php">Subir Video <span class="sr-only">(current)</span></a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a>
      </li>
		
		<?php 			
				}else{
		?>
      
      <li class="nav-item">
        <a class="nav-link" href="vistas/login.php">Iniciar Sesion</a>
      </li>
		
		
		<?php }}else{?>
						<li class="nav-item">
        <a class="nav-link" href="vistas/login.php">Iniciar Sesion</a>
      </li>
				<?php		}?>
      		<li class="nav-item">
        <a class="nav-link" href="vistas/sign.php">Registrarse</a>
      </li>
    </ul>
 
  </div>
</nav>
	
	<div class="card-columns">
  <?php	include_once 'database/conexion.php';
		
		$db = new Database();
	$conexion = $db->connect()->prepare("select * from videos");
		$conexion->execute([]);
 		 while($filas = $conexion->fetch(PDO::FETCH_OBJ)){
			 $videos[]=$filas;
			 
		 }
		
		foreach($videos as $vid){
			$idV=$vid->id_video;
			
		
  ?>
  <div class="card" style="margin:70px;width: 100px;height:60px;" >
	  <a href="vistas/ver_video.php?id=<?php echo $idV;?>">
    <img src="resources/img/<?php echo $vid->video_archivo?>" class="card-img-top" >
	  </a>
  </div>
  
		<?php }?>
  </div>
</div>
	
	
	
	
	
	<script src="resources/js/bootstrap/popper.min.js"></script>
    <script src="resources/js/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="resources/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>