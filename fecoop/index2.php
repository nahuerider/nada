<?php
	require "admin/functiones.php";
?>
<html lang="es">
	<head>
		<title>Quienes Somos?</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Sitio web de nuestra organizacion Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion(Fecoopteba) ¿Quienes somos? Nuestros Objetivos e Historia ">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="canonical" href="https://fecoopteba.coop/index2.php" />
		<link rel="stylesheet" href="admin/styleuser.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="admin/fonts.css" />
		<meta name="revisit-after" content="4 days">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="image/x-icon"/>
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="admin/main.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117830234-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-117830234-1');
        </script>
		 <!-- Bootstrap core CSS     -->
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


	</head>
	<body>
	<header>
	<div >
		<div class="menu_bar">
		<img src="logonav.svg" alt="logo fecoopteba" class="logo3" />	
		<a href="#" class="bt-menu"><img src="icons/menu.svg" alt="logo fecoopteba pequeño" class="logo65" /></a>
		</div>
		
		<nav>
			<div class="logo"><a href="index.php"> <img alt="logo fecoopteba" src="logonav.svg" alt="logo del navegador" class="logo2" /> </a>	</div>
				<ul>
				<li ><a href="index.php"><img alt="icono inicio" src="icons/botonhogar5.svg" class="logo56" /><p class="pmenu">INICIO</p></a></li>
				<li ><a href="index2.php"><img alt="icono sobre nosotros" src="icons/grupo69.svg" class="logonosotros" /><p class="pmenu">SOBRE NOSOTROS</p></a></li>
				<li ><a href="index3.php"><img alt="icono documentos" src="icons/documento5.svg" class="logodocumento" /><p class="pmenu">DOCUMENTOS</p></a></li>
				<li ><a href="index4.php"><img alt="icono comisiones"src="icons/comisiones5.svg" class="logocoopteba" /><p class="pmenu">COMISIONES</p></a></li>
				<li ><a href="index5.php"><img alt="icono noticias"src="icons/noticia5.svg" class="logonoticia" /><p class="pmenu">NOTICIAS</p></a></li>
				<li ><a href="index6.php"><img alt="icono cooptebas"src="icons/usuario5.svg" class="logocoopteba" /><p class="pmenu">COOPTEBAS</p></a></li>
				<li ><a href="index7.php"><img alt="icono vinculos"src="icons/vinculo5.svg" class="logocontacto" /><p class="pmenu">VINCULOS</p></a></li>
				<li ><a href="index8.php"><img alt="icono contactos"src="icons/contacto5.svg" class="logocontacto" /><p class="pmenu">CONTACTO</p></a></li>
						
				</ul>		
			</nav>
	</div>	
	</header>

		
		<?php 
			require 'admin/conection.php';
			$sql = "SELECT texto FROM texto WHERE localizacion='historia'";
			$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
			
			$historia = mysqli_fetch_array($texto);
			
			if(!empty($historia['0'])){
				echo "<div class='card  bg-primary mb-3' >
						<div class='card-header'><h2 class='encabezao'>
							<img alt='icono historia' src='icons/historia.png' class='iconitos'/>Historia</h2></div>
								<div class='card-body'>
									<div class=''>".$historia['0']."</div>
								</div>	
					</div>";
			}
		?>
		
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
			
				
		<?php
				$sql3 = "SELECT texto FROM texto WHERE localizacion='objetivo'";
				$texto3=mysqli_query($con,$sql3) or die(mysqli_error($con));
				
				$objetivo = mysqli_fetch_array($texto3);
				if(!empty($objetivo[0])){
					echo "<section class='obj'><h2 class='encabezao'><img alt='icono objetivo' src='icons/objetivo3.png' class='iconitos'/>Objetivos</h2><div class='objtex'>".$objetivo[0]."</div></section>";
				}

		
		
		?>
		
		
		
			
			
		<?php
			$sql1 = "SELECT id_noticia,titulo,sinopsis,portada FROM noticia WHERE actividad=1 ORDER BY prioridad DESC LIMIT 3";
			$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
			
			if(mysqli_num_rows($texto2)==0){
				
			}
			else{
				echo "<section class='act'><h2 class='title'>Actividades</h2>";
				while($actividades = mysqli_fetch_array($texto2)){
					
					echo "<div class='index2caja'><img  alt='".$actividades['1']."' class='imgct' src='".$actividades['3']."'><div class='actparrafo'>".cortar($actividades['2'],135)."</div><div class='overlay3'><div class='text3'>".cortar($actividades['1'],30)."</br></br><a class='link' href='display.php?noticia=".$actividades['0']."'>LEER MAS</a></div></div></div>";
                }
				echo "</section>";
			}
	
	
		?>
				
        <script>
		    
		    $(document).ready(function() {
              $('img').each(function() {
                var srcx = $(this).attr('src');
                
                $(this).attr('error', this.src='admin/'+srcx);
              });
            });
		</script>
		
			
			
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