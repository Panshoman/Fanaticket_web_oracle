<?php
	session_start();
	include "include/config.php";
	if(isset($_GET["login"])){
		$username = $_GET['username'];
		$password = $_GET['password'];
		//$Query = "SELECT * FROM FANA_USUARIO WHERE USERNAME='".$username."'";
		$Query = "SELECT * FROM FANA_USUARIO WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
		$Result = oci_parse($conn,$Query);
		oci_execute($Result) or die('execute error');	
		$numrows = oci_fetch_all($Result, $res);
		//echo $numrows." Renglones  !<br /><br />";;	
		if(oci_num_rows($Result)>0){
			//echo "Usuario '".$username."' !<br /><br />";			
			
				$_SESSION["logged"] = true;
				$_SESSION["username"] = $username;
				header("Location:index.php");
		}else{
				$PesanLogin = "<p class=not-login>Nombre de Usuario o Contraseña Incorrecta !</p>";			
		}
		
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login FANA</title>	
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/fw/css/font-awesome.css">
</head>
<body class="body-login">
<body style="background-color:#81BEF7">
	<section class="content">
	<div class="header-login">
		<img src="assets/img/exit.png" class="exit">
		<p class="title-login">login Fanticket System</p>
	</div>
		<form action="" method="GET" accept-charset="utf-8" class="form-login">
			<label for="username">Username :</label>&nbsp;
			<input type="text" name="username" placeholder="username" id="username"><br>
			<label for="password">Password &nbsp;:</label>&nbsp;
			<input type="password" name="password" placeholder="password"><br><br>
			<button type="submit" name="login"><i class="fa fa-sign-in"></i>&nbsp;Login</button><br>
			<?php
				echo @$PesanLogin;
			?>
		</form>
	</section>
	<footer>
		<img src="assets/img/LOGO.PNG" class="logo">
		<p class="copyright">Copyright &copy; 2017 FANATICKET SYSTEM</p>
	</footer>
</body>
</html>