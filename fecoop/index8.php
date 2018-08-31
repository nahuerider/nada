<!DOCTYPE html>
<html>
<head lang="es">
	<title>Contacto</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Sitio web de nuestra organizacion Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion(Fecoopteba) Contactanos ">
	
	<meta name="keywords" content="FeCoopteba,Sobre Nosotros,Historia,Objetivos,Actividades,Vinculos,Cooptebas,Noticias,Contacto,Comisiones,Federacion,Viviendas,LTDA,Trabajadores,Educacion">
		<meta name="author" content="Fecoopteba">
		<meta name='subject' content='Noticias e Informacion sobre Fecoopteba,Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion'>
		<meta name='copyright' content='Kubo Cuantico'>
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="4 days">
		
		<link rel="canonical" href="https://fecoopteba.coop/index8.php" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="admin/styleuser.css">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="admin/main.js"></script>
	<style>
		#map{
			width:100%;
			height:30%;
			display:block;
		}
		.linea{
			width:100%;
			height:3%;
			
			background:#023859;
		}
		.footer{
			margin-top:3%;
		}
	</style>
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
			<img src="logonav.svg" alt="logo fecoopteba" class="logo3" />	
			<a href="#" class="bt-menu"><img alt="logo fecoopteba pequeño" src="icons/menu.svg" class="logo65" /></a>
			</div>
			
			<nav>
				<div class="logo"><a href="index.php"> <img src="logonav.svg" alt="logo del navegador" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index.php"><img alt="icono inicio" src="icons/botonhogar5.svg" class="logo56" /><p class="pmenu">INICIO</p></a></li>
					<li ><a href="index2.php"><img alt="icono sobre nosotros" src="icons/grupo69.svg" class="logonosotros" /><p class="pmenu">SOBRE NOSOTROS</p></a></li>
					<li ><a href="index3.php"><img alt="icono documentos" src="icons/documento5.svg" class="logodocumento" /><p class="pmenu">DOCUMENTOS</p></a></li>
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
					$sql = "SELECT texto FROM texto WHERE localizacion='contacto'";
					$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
					
					$contacto = mysqli_fetch_array($texto);
					if(!empty($contacto[0])){
						echo "<section class='documentos' ><div ><h1 class='encabezaox'><img alt='icono donde contactarnos' src='icons/dondecontacto.png' class='iconitos'/>Donde Contactarnos?</h1><br><div class='objtex'><p>".$contacto[0]."</p></div></div></section>";
					}
				

			
			
		?>
			
		
		
		<section class="texin">
			<center><h2 class="encabezao"><img src="icons/contacto.png" alt="icono contacto" class="iconitos"/>Envianos un Correo</h2></center>
			<form action="sent.php" method="POST">
				<h3 class="consigna">Nombre:</h3>
					<input type="text" maxlength="30" class="output" required name="nombre">
				<h3 class="consigna">Correo:</h3>
					<input type="text"  maxlength="100" class="output" name="email" required>
				<h3 class="consigna">Mensaje:</h3>
					<textarea rows="8" cols="42" maxlength="300" name="mensaje" required></textarea>
				<input type="submit" name="Enviar" class="botonenviar" style="margin: 5%;">
			</form>
		</section>
		
		
		<?php
			
			
			require 'admin/conection.php';
			$sql1 = "SELECT lat,lon FROM asociado WHERE categoria=0";
			$texto=mysqli_query($con,$sql1) or die(mysqli_error($con));
			$fila=mysqli_fetch_array($texto);
			
			if(empty($fila[0]) or empty($fila[1])){
				
			}
			else{
				echo "<hr class='linea'><div id='map'></div><hr class='linea'>";
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
		<div class="firma">
		<a href="https://www.facebook.com/KuboCuantico/" class="kubo" style="    text-decoration-color: white;
color: white;
margin-left: 1%;">&copy KuboCuantico</a>
			</div>
		</footer>
	</section>
	<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeDjRqDrHHpnjYrXT3lO0nwmgyNwMzcsg&callback=initMap">
		</script>
		<script
		  src="js/cargarmap.js">
		</script>
		<script>
			var map=new google.maps.Map(document.getElementById('map'),{
				center:{
					lat:<?php if(isset($fila['0'])){ echo $fila['0']; }else{ echo "-34.6162667"; } ?>,
					lng:<?php if(isset($fila['1'])){ echo $fila['1']; }else{ echo "-58.3774951"; } ?>
				},
				zoom:12
			});
			var marker=new google.maps.Marker({
			
			position:{
				lat:<?php if(isset($fila['0'])){ echo $fila['0']; }else{ echo "-34.6162667"; } ?>,
				lng:<?php if(isset($fila['1'])){  echo $fila['1']; }else{ echo "-58.3774951";} ?>
			},
			map:map,
			draggable:false
			});
			
		</script>
		<script>
		    
		    $(document).ready(function() {
              $('img').each(function() {
                var srcx = $(this).attr('src');
                
                $(this).attr('error', this.src='admin/'+srcx);
              });
            });
		</script>
	
</body>
</html>