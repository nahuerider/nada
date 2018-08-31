<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
		<title>Procesando...</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<style>
		body{
			background-color:white;
		}
		.recarga{
			width:50%;
			margin:0 auto;
		}
		.fa-3x{
		font-size:10em;
		color:#2B6DD8;
		width:100%;
		}
		</style>
	</head>
	<body>
	<?php if (login_check($mysqli) == true) : ?>
	<div class="recarga">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
	</body>
</html>

<?php
	$aborrar=$_POST['ids'];
	require 'conection.php';
	$z=array_filter($aborrar);
	if(count($z)==0){
			header("location: eliminarnoticia.php?var=3");
	}else{
		foreach($aborrar as $noticia=>$idnoticia){
			$query1="SELECT portada from noticia WHERE id_noticia=$idnoticia";
			$text3=mysqli_query($con,$query1) or die(mysqli_error($con));
			$fila2=mysqli_fetch_array($text3);
			$archivo2=$fila2['0'];
			unlink($archivo2);
			$query2="DELETE FROM `noticia` WHERE id_noticia=$idnoticia";
			mysqli_query($con,$query2) or die(mysqli_error($con));
			
		}
		header("location: eliminarnoticia.php?var=1");
	}	
?>
<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>