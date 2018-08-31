<?php
	$con=mysqli_connect("sql146.main-hosting.eu.","u519469703_admin","TpcqbGN1LweRVyPY","u519469703_fecop");
	if (!$con){
		header("Location:../error.php?err=No se puede conectar en este momento");
		die("Connection failed:".mysqli_connect_error());
		echo "No se pudo conectar con el servidor";
	}
?>
