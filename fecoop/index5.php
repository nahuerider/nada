<?php
	require "admin/functiones.php";
?>
<html lang="es">
	<head>
		<title>Noticias</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Sitio web de nuestra organizacion Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion(Fecoopteba) Nuestras noticias ">
		
		<meta name="keywords" content="FeCoopteba,Sobre Nosotros,Historia,Objetivos,Actividades,Vinculos,Cooptebas,Noticias,Contacto,Comisiones,Federacion,Viviendas,LTDA,Trabajadores,Educacion">
		<meta name="author" content="Fecoopteba">
		<meta name='subject' content='Noticias e Informacion sobre Fecoopteba,Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion'>
		<meta name='copyright' content='Kubo Cuantico'>
		<meta name="robots" content="index, follow">
		<link rel="canonical" href="https://fecoopteba.coop/index5.php" />
		
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css">
		<meta name="viewport" content="width=device-width">
		<meta name="revisit-after" content="4 days">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="admin/main.js"></script>
		<script src="admin/js/filtrar.js"></script>
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
			<a href="#" class="bt-menu"><img src="icons/menu.svg" alt="logo fecoopteba pequeño"  class="logo65" /></a>
			</div>
			
			<nav>
				<div class="logo"><a href="index.php"> <img src="logonav.svg" alt="logo del navegador" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index.php"><img alt="icono inicio" src="icons/botonhogar5.svg" class="logo56" /><p class="pmenu">INICIO</p></a></li>
					<li ><a href="index2.php"><img alt="icono sobre nosotros" src="icons/grupo69.svg" class="logonosotros" /><p class="pmenu">SOBRE NOSOTROS</p></a></li>
					<li ><a href="index3.php"><img alt="icono documentos" src="icons/documento5.svg" class="logodocumento" /><p class="pmenu">DOCUMENTOS</p></a></li>
					<li ><a href="index4.php"><img alt="icono comisiones" src="icons/comisiones5.svg" class="logocoopteba" /><p class="pmenu">COMISIONES</p></a></li>
					<li ><a href="index5.php"><img alt="icono noticias" src="icons/noticia5.svg" class="logonoticia" /><p class="pmenu">NOTICIAS</p></a></li>
					<li ><a href="index6.php"><img alt="icono noticias" src="icons/usuario5.svg" class="logocoopteba" /><p class="pmenu">COOPTEBAS</p></a></li>
					<li ><a href="index7.php"><img alt="icono vinculos" src="icons/vinculo5.svg" class="logocontacto" /><p class="pmenu">VINCULOS</p></a></li>
					<li ><a href="index8.php"><img alt="icono contactos" src="icons/contacto5.svg" class="logocontacto" /><p class="pmenu">CONTACTO</p></a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>
		<section class="buscar">
				<h2 class="encabezado"><img src="admin/icons/noticias.png" class="iconitos2"/>Noticias</h2>
				<section class="buscador">
					<form class="formbus" action="busqueda.php" method="GET">
						<input name="word" type="text" size="15" maxlength="50" class="seach" placeholder="Buscar...">
						<span class="xcom"><input type="submit" value="&#xf002" class="fa fa-input"></span>
					</form>
				</section>
				
			

			</div>
		</section>
		<br>
		<?php
					if(isset($_GET['bol'])){
						$bol=$_GET['bol'];
					}else{
						$bol=1;
					}
					
					if(isset($_GET['orden'])){
						if($_GET['orden']==1){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha?</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha?</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}
						}else if($_GET['orden']==2){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=2'>Alfabeticamente?</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente?</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
							}
							
						}else if($_GET['orden']==3){
							if($bol==1){
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div><div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div><div class='relev'><a href='index5.php?orden=3&bol=2'>Relevancia?</a></div></div>";
							}else{
								echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=1'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia?</a></div></div>";
							}
							
						}else{
							echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
						}
					}else{
						echo "<div class='orden'><div class='fec'><a href='index5.php?orden=1&bol=2'>Fecha</a></div> <div class='alf'><a href='index5.php?orden=2&bol=1'>Alfabeticamente</a></div> <div class='relev'><a href='index5.php?orden=3&bol=1'>Relevancia</a></div></div>";
					}
					
					echo "<div></section><br>";
				
					require 'admin/conection.php';
					$pagina=isset($_GET['pag'])? $_GET['pag'] :1;
					if($pagina=="" || $pagina=="1"){
						$pagina1=0;
					}
					else{
						$pagina1=($pagina*8)-8;
					}
					
					
					
					if(isset($_GET['orden'])){
						$order=$_GET['orden'];
						if($order==1){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY fecha DESC limit $pagina1,8";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY fecha ASC limit $pagina1,8";
							}
						}else if($order==2){
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY titulo ASC limit $pagina1,8";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY titulo DESC limit $pagina1,8";
							}
						}else{
							if($bol==1){
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad DESC limit $pagina1,8";
							}else{
								$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad ASC limit $pagina1,8";
							}
						}
					}else{
						$sql1 = "SELECT id_noticia,titulo,sinopsis,portada,prioridad,fecha FROM noticia ORDER BY prioridad DESC limit $pagina1,8";
						$order=4;
					}
					
					
					
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					if(count($texto2)!=0){
						echo "<section class='notise'>";
						echo "<div id='list'>";
						$x=rand(1, 3);
						while($noticiadestacada = mysqli_fetch_array($texto2)){
							$dia=date_create($noticiadestacada['5']);
							$daa=date_format($dia,'d/m/Y');
							$titulo=cortar($noticiadestacada['1'],27);
							$sinopsis=cortar($noticiadestacada['2'],100);
							if($x==1){
								echo "<div class='contenedor-img7 ejemplo-3' id='chico'><img alt='".$titulo."' src='admin/".$noticiadestacada['3']."' /><div class='mascara7'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p class='date'>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==2){
								echo "<div class='contenedor-img8 ejemplo-3' id='chico'><img alt='".$titulo."' src='admin/".$noticiadestacada['3']."' /><div class='mascara8'><p class='date'>".$daa."</p><h2 class='nose3'>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}elseif($x==3){
								echo "<div class='contenedor-img9 ejemplo-3' id='chico'><img alt='".$titulo."' src='admin/".$noticiadestacada['3']."' /><div class='mascara9'><p class='date'>".$daa."</p><h2>".$titulo."</h2><p>".$sinopsis."</p><a href='display.php?noticia=".$noticiadestacada['0']."' class='link'>Leer Mas</a></div></div>";
								
							}
							if($x==3){
								$x=1;
							}else{
								$x=$x+1;
							}
						}
						echo "</div>";
						
						echo "<br><br>";
						$sql2 = "SELECT id_noticia FROM noticia";
						$res=mysqli_query($con,$sql2) or die(mysqli_error($con));
						$countador=mysqli_num_rows($res);
						$a=$countador/8;
						$a= ceil($a);
						echo "<div class='rapido'>";
						for($b=1;$b<=$a;$b++){
							echo "<div class='nmros'><a href='index5.php?pag=".$b."&orden=".$order."&bol=".$bol."' style=' text-decoration:none; '>".$b."</a></div>";
						}
						echo "</div>";
						echo "</section>";
					}else{
						
					}
				?>
			
		</section>
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
			<div class="firma">
			<a href="https://www.facebook.com/KuboCuantico/" class="kubo" style="    text-decoration-color: white;
    color: white;
    margin-left: 1%;">&copy KuboCuantico</a>
				</div>
			</footer>
		</section>
	</body>
</html>