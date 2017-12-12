<?php
	echo "<h2>Oracle Connection</h2><br />";
	$username = "system"; //sesuaikan dengan username ente
	$password = "Qwer1234"; //sesuaikan dengan password ente
	$host = "localhost/xe"; //sesuaikan dengan host database ente
	$conn = oci_connect($username,$password,$host) or die('connection failed !');
	
	// if(!empty($koneksi)){
	// 	echo "Conexion Exitosa !<br /><br />";
	// }else{
	// 	echo "Cnexion Negada !<br />";
	// }
?>