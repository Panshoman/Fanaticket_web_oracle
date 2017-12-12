<?php
	session_start();
	include "include/config.php";
	if(isset($_GET['logout'])){
		unset($_SESSION["logged"], $_SESSION["username"]);
	}
	if(!isset($_SESSION['logged'])) header("Location:login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Fanaticket</title>	
	<link rel="stylesheet" href="assets/css/fw/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body-index">
	<header>
		<h6>Bienvenido! <b><?=$_SESSION['username'];?></b>&nbsp;| <a href="?logout">Logout</a></h6> 
	<nav>
			<ul>
				<li><a href="?page=evento"><i class="fa fa-calendar"></i>&nbsp;Eventos</a>
				<ul class="dd-bawah">
				<div class="clear"></div>
					<li><a href="?page=evento">Consultar</a></li>
					<li><a href="?page=evento">Crear</a></li>
				</ul>
				</li>
				<li><a href="?page=servcio"><i class="fa fa-wrench"></i>&nbsp;Servicios</a></li>
				<li><a href="?page=user"><i class="fa fa-group"></i>&nbsp;User / Admin</a></li>
			</ul>
		</nav>
	</header>

	<!-- <section class="content-index">
		<?php
			include "modules/index.php";
		?>
	</section> -->

</body>
</html>