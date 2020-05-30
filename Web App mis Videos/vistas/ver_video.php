<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento sin título</title>
<link rel="stylesheet" href="../resources/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet"  href="../resources/css/css/all.min.css">
	
</head>
	
<body>
	
	<?php	include_once '../database/conexion.php';
		
		$id_video=$_GET['id'];
	
	
 		 	$row = select($id_video);
		?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">YouTube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
<?php if($row){
			
			$link=$row[6];
			$linkneto=substr($link,-11);			
}?>  
	
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $linkneto;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	
<div class="jumbotron">
  <h1 class="display-4"></h1>
  <p class="lead"></p>
	
		
  <hr class="my-4">
  <p><?php			
		
				if($row){
			
				$nombre_video=$row[2];				
				echo "Nombre del video: ".$nombre_video;
					?><br><?php
				$rs=$row[4]	;  
				echo "Red Social: "	.$rs;
					?><br><?php
				$rate=$row[3]	;  
				echo "Rate: "	.$rate;	
					?><br><?php
				$link=$row[6]   ;	
				echo "Link: "   .$link;
}
		
				
			   
		
	
	
	?></p>
  <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Ver Perfil</a> </p>
</div>
	
	
	
	
	
	<script src="../resources/js/bootstrap/popper.min.js"></script>
    <script src="../resources/js/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="../resources/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>


<?php
function select($id_video){
			
			$id_video=$_GET['id'];
			$db = new Database();
 		 	$query = $db->connect()->prepare("SELECT * FROM videos WHERE id_video = :id");
			$query ->  execute(['id'=>$id_video]);
			return $query->fetch(PDO::FETCH_NUM);
		}
?>