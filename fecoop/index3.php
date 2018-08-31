<html lang="es">
<head>
		<title>Documentos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Sitio web de nuestra organizacion Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion(Fecoopteba) Documentos y Legislaciones ">
		
		<meta name="keywords" content="FeCoopteba,Sobre Nosotros,Historia,Objetivos,Actividades,Vinculos,Cooptebas,Noticias,Contacto,Comisiones,Federacion,Viviendas,LTDA,Trabajadores,Educacion">
		<meta name="author" content="Fecoopteba">
		<meta name='subject' content='Noticias e Informacion sobre Fecoopteba,Federacion de Cooperativas de Viviendas y Consumo de los Trabajadores de la Educacion'>
		<meta name='copyright' content='Kubo Cuantico'>
		<meta name="robots" content="index, follow">
		<link rel="canonical" href="https://fecoopteba.coop/index3.php" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Serif|Source+Sans+Pro" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito" rel="stylesheet">
		<link rel="stylesheet" href="admin/styleuser.css"/>
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
		<img src="logonav.svg" alt="logo fecoopteba" class="logo3" />	
		<a href="#" class="bt-menu"><img alt="logo fecoopteba pequeño" src="icons/menu.svg" class="logo65" /></a>
		</div>
		
		<nav>
			<div class="logo"><a href="index.php"> <img src="logonav.svg" alt="logo fecoopteba pequeño" class="logo2" /> </a>	</div>
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
						$sql = "SELECT texto FROM texto WHERE localizacion='docs'";
						$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
						
						$sql1 = "SELECT nombre,rutadoc FROM documento WHERE categoria=1 ORDER BY prioridad DESC";
						$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
						
						if(count($texto)!=0 or count($texto2)!=0){
							echo "<section class='documentos'><div><h2 class='encabezao'><img alt='imagenes documentos' src='icons/documentos.png' class='iconitos'/>Documentos</h2>";
							$docs=mysqli_fetch_array($texto);
							if(!empty($docs['0'])){
								echo "<div class='check'>".$docs['0']."</div><br>";
							}
							if(count($texto2)!=0){
								echo "<div class='lista'><ul class='ul1'>";
								while($docs2 = mysqli_fetch_array($texto2)){
									echo "<li class='li32'><a class='soloqueiroterminareiradormir' href='admin/".$docs2['1']."'><p >".$docs2['0']."<p></a></li>";
								}
							}else{
								
							}
							echo"</ul></div><br></div></section>";
						}	
							
					?>
				
			
				
					
						
					
				
				
			
		

		
			
				
									
					<?php
							$sql4 = "SELECT nombre,rutadoc FROM documento WHERE categoria=2  ORDER BY prioridad DESC";
							$sql3 = "SELECT texto FROM texto WHERE localizacion='legislacion'";
							$texto4=mysqli_query($con,$sql4) or die(mysqli_error($con));
							$texto3=mysqli_query($con,$sql3) or die(mysqli_error($con));
							
							
							$legis = mysqli_fetch_array($texto3);
							if(count($legis)!=0 or count($texto4)){
								echo "<section class='texin'><div><h2 class='encabezao'><img alt='imagen legislacion' src='icons/legislacion.png' class='iconitos'/>Legislacion</h2>";
								if(!empty($legis['0'])){
									echo "<div class='check'>".$legis['0']."</div><br>";
								}
								if(count($texto4)!=0){
									echo "<div class='lista'><ul class='ul1'>";
									while($legislacion = mysqli_fetch_array($texto4)){
										echo "<li class='li32'><a class='soloqueiroterminareiradormir' href='admin/".$legislacion['1']."'><p >".$legislacion['0']."<p></a></li>";
									}
									echo "</ul></div><br>";
								}
									
								echo "</div></section>";
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