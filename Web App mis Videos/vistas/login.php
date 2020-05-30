<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>SISPACC</title>
		
	
	<link rel="stylesheet" href="../resources/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet"  href="../resources/css/css/all.min.css">
	<link rel="stylesheet" href="../resources/css/loginStyles.css">
	
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
        <a class="nav-link" href="formulario_video.php">Subir Video <span class="sr-only">(current)</span></a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="../cerrar_sesion.php">Cerrar Sesion</a>
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
      
    </ul>
    
	  
  </div>
</nav>

	
		
	
		
	<div class="modal-dialog text-center">
		
	
		<div class= "col-sm-8 main-section">
			<div class="modal-content">	

				<div class="col-12 user-img">
					<i class="user fas fa-user"></i>
				</div>

				<?php 
					if (isset($_GET['res'])) {
						if($_GET['res']== 'error'){
				?>				<div class="alert alert-danger" role="alert">
				  				Usuario o contraseña incorrecto
								</div>
				<?php					}
					}
				?>
				
				<form class="col-12"action="checkLogin.php" method="post">
					
					<div class="form-group">	
						<input type="Text" maxlength="30" size="30" class="form-control" placeholder="Usuario" name="usuario">
					</div>
					
					<div class="form-group">
						<input type="Password" maxlength="30"class="form-control" placeholder="Contraseña" size="30" name="contrasena">
					</div>
					
					<button class="btn" type="submit"><i class="fas fa-sign-in-alt"> </i> Ingresar</button>
					
				</form>
				
			</div>
		</div>
    </div>
  
	<script src="../resources/js/bootstrap/popper.min.js"></script>
    <script src="../resources/js/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="../resources/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>