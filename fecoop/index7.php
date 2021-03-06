<?php
	require "admin/functiones.php";
?>
<html lang="es">
	<head>
		<title>Vinculos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Sitio web de nuestra organizacion Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion(Fecoopteba) Otros entes ">
		
		<meta name="keywords" content="FeCoopteba,Sobre Nosotros,Historia,Objetivos,Actividades,Vinculos,Cooptebas,Noticias,Contacto,Comisiones,Federacion,Viviendas,LTDA,Trabajadores,Educacion">
		<meta name="author" content="Fecoopteba">
		<meta name='subject' content='Noticias e Informacion sobre Fecoopteba,Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion'>
		<meta name='copyright' content='Kubo Cuantico'>
		<meta name="robots" content="index, follow">
		<link rel="canonical" href="https://fecoopteba.coop/index7.php" />
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css">
		<meta name="viewport" content="width=device-width">
		<meta name="revisit-after" content="4 days">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117830234-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-117830234-1');
        </script>
	</head>
	<body>
	<header>
			<div >
			<div class="menu_bar">
			<img src="admin/logonav.svg" alt="logo fecoopteba" class="logo3" />	
			<a href="#" class="bt-menu"><img src="icons/menu.svg" alt="logo fecoopteba pequeño" class="logo65" /></a>
			</div>
			
			<nav>
				<div class="logo"><a href="index.php"> <img src="logonav.svg" alt="logo del navegador" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index.php"><img alt="icono inicio" src="icons/botonhogar5.svg" class="logo56" /><p class="pmenu">INICIO</p></a></li>
					<li ><a href="index2.php"><img alt="icono sobre nosotros" src="icons/grupo69.svg" class="logonosotros" /><p class="pmenu">SOBRE NOSOTROS</p></a></li>
					<li ><a href="index3.php"><img  alt="icono documentos" src="icons/documento5.svg" class="logodocumento" /><p class="pmenu">DOCUMENTOS</p></a></li>
					<li ><a href="index4.php"><img alt="icono comisiones" src="icons/comisiones5.svg" class="logocoopteba" /><p class="pmenu">COMISIONES</p></a></li>
					<li ><a href="index5.php"><img alt="icono noticias" src="icons/noticia5.svg" class="logonoticia" /><p class="pmenu">NOTICIAS</p></a></li>
					<li ><a href="index6.php"><img alt="icono cooptebas" src="icons/usuario5.svg" class="logocoopteba" /><p class="pmenu">COOPTEBAS</p></a></li>
					<li ><a href="index7.php"><img alt="icono vinculos" src="icons/vinculo5.svg" class="logocontacto" /><p class="pmenu">VINCULOS</p></a></li>
					<li ><a href="index8.php"><img alt="icono contactos" src="icons/contacto5.svg" class="logocontacto" /><p class="pmenu">CONTACTO</p></a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>
		<?php
									require 'admin/conection.php';
									$sql = "SELECT id_asociado,nombre,logo FROM asociado WHERE categoria=1";
									$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
									if(count($texto)!=0){
										echo "<section class='asoc'><div><div class='tabasoc'>";
										echo "<tr>";
										while($asociado = mysqli_fetch_array($texto)){
											
												echo "<div class='cajaasociados'><img alt='".$asociado['1']."' class='imgasociados' src='admin/".$asociado['2']."'><div class='overlay'><div class='text'>".cortar($asociado['1'],30)."</br></br><a href='verasociado.php?asociado=".$asociado['0']."' class='link'>Leer Mas</a></div></div></div>";
											
										}
										echo "</div></section>";
									}
							?>
		<section class="footer">
			<footer>
			<div class="social">
				<a href=""><span class="socialicon"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></span></a>
				<a href=""><span class="socialicon"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></span></a>
				<a href=""><span class="socialicon"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></span></a>
			</div>
			<hr class="endofline">
			<div class="footercont">
				<p>Federacion de Cooperativas de Viviendas y Consumo </br>de los Trabajadores de la Educacion </br>Provincia de Buenos Aires</br>Matricula Nacional:55161 "Fecoopteba LTDA"</p>
				
			</div>	
			<p class="kubo">&copy KuboCuantico</p>
			</footer>
		</section>
	</body>
</html>