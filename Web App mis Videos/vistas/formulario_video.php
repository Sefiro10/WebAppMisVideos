<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel="stylesheet" href="../resources/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet"  href="../resources/css/css/all.min.css">
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">YouTube</a>
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
	
	
	<div class="container-fluid" style="width: 50%;margin-top: 30px;">
	<form action="subir_video.php" method="POST" enctype="multipart/form-data" multiple="multiple">
		  <div class="form-group">
			<label for="nombre_video">Nombre del video</label>
			<input type="text" class="form-control" id="nombre_video" name="nombre_video" >
		  </div>
		<div class="form-group">
			<label for="rate">Rate</label>
			<input type="text" class="form-control" id="rate" name="rate" required>
		  </div>
		<div class="form-group">
			<label for="rs">Red social</label>
			<input type="text" class="form-control" id="rs" name="rs" required>
		  </div>
		<br>
		<div class="form-group">
			<label for="archivo">Miniatura del video</label>
			<input type="file"  id="archivo" name="archivo">
		  </div>
		<div class="form-group">
			<label for="link">Enlace del video</label>
			<input type="text" class="form-control" id="link" name="link" required>
		  </div>
		  
		  
		  <button type="submit" class="btn btn-primary" >Submit</button>
		</form>
	</div>
	
	<script src="../resources/js/bootstrap/popper.min.js"></script>
    <script src="../resources/js/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="../resources/js/bootstrap/bootstrap.min.js"></script>
</body>
	
</html>