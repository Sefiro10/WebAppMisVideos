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
        <a class="nav-link" href="login.php">Iniciar Sesion</a>
      </li>
		
		
		<?php }}else{?>
						<li class="nav-item">
        <a class="nav-link" href="login.php">Iniciar Sesion</a>
      </li>
				<?php		}?>
      		<li class="nav-item">
        <a class="nav-link" href="sign.php">Registrarse</a>
      </li>
    </ul>
 
  </div>
</nav>
	
	
	<div class="container-fluid" style="width: 50%;margin-top: 30px;">
	<form action="subir_perfil.php" method="POST" enctype="multipart/form-data" multiple="multiple">
		  <div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" required>
		  </div>
		<div class="form-group">
			<label for="apellido">Apellido</label>
			<input type="text" class="form-control" id="apellidoe" name="apellido" required>
		  </div>
		<div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="text" class="form-control" id="usuario" name="usuario" required>
		  </div>
		<br>
		<div class="form-group">
			<label for="pass">Contraseña</label>
			<input type="password" class="form-control" id="pass" name="pass" required>
		  </div>

		  
		  
		  <button type="submit" class="btn btn-primary" >Submit</button>
		</form>
	</div>
	
	<script src="../resources/js/bootstrap/popper.min.js"></script>
    <script src="../resources/js/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="../resources/js/bootstrap/bootstrap.min.js"></script>
</body>
	
</html>