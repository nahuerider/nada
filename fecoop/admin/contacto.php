<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>

<html>
	<head>
			<title>Contacto</title>
			<meta charset="UTF-8"/>
			<script src="jquery-3.2.1.js"></script>
			
			<link rel="stylesheet" href="styleuser.css"/>
				<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
			
			<link href="estilo.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="icon" href="favicon.png" type="image/x-icon"/>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
			
			
			
			<script src="https://code.jquery.com/jquery-latest.js"></script>
			<script src="main.js"></script>
			<script src="mainbarra.js"></script>
			<link rel="stylesheet" href="barrastyle.css">
			
			
			<style>
			#map{
				margin-bottom: 5%;
				height:70%;
				width: 100%;
			}
		</style>
		
		
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

		<!-- include summernote css/js -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
		<script src="https://fecoopteba.coop/admin/lang/summernote-es-ES.js"></script>
		<script src="notify.js"></script>
		
		
		<link rel="stylesheet" href="estiloayuda.css" type="text/css"/>
	</head>
	<body>
	<?php if (login_check($mysqli) == true) : ?>
	<section class="oja">
			<span id="botonmenu" class="fa fa-arrow-right"></span>
            <nav class="barra">
                <ul class="lista1">
                    <li class="inicio">Opciones Modo Administrador</li>
					<li menu="0"><a href="redireccion.php"><i class="fa fa-home"></i> Home</a>
                    <li class="item-sublista" menu="1"><a href="#"><i class="fa fa-plus-square"></i> Crear</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-plus-square"></i> Crear</li>
                            <li class="atras">Volver</li>
                            <li><a href="nuevanoti.php"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                            <li><a href="crearasociado.php?cate=1"><i class="fa fa-user-plus"></i> Vinculo</a></li>
                            <li><a href="crearasociado.php?cate=2"><i class="fa fa-user-plus"></i> Coopteba</a></li>
                            <li><a href="guardardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="crearcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="publicaciones.php"><i class="fa fa-align-left"></i> Publicaciones</a></li>
                        </ul>
                    </li>    
                    <li class="item-sublista" menu="2"><a href="#"><i class="fa fa-edit"></i> Modificar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-edit"></i> Modificar</li>
                            <li class="atras">Volver</li>
                            <li><a href="modificarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Vinculo</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Coopteba</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-book"></i> Legislaciones</a></li>
							<li><a href="modificarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="modificarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="vinculosasociados.php"><i class="fa fa-users"></i> Publicar Entes</a></li>
                        </ul>
                    </li>
					<li class="item-sublista" menu="3"><a href="#"><i class="fa fa-th-large"></i> Secciones</a>
						<ul class="sublista">
							<li class="inicio"><i class="fa fa-th-large"></i> Secciones</li>
                            <li class="atras">Volver</li>
							<li><a href="contacto.php"><i class="fa fa-phone-square"></i> Contacto</a></li>
                            <li><a href="guardarobjetivos.php"><i class="fa fa-line-chart"></i> Objetivos</a></li>
                            <li><a href="historia.php"><i class="fa fa-archive"></i> Historia</a></li>
							<li><a href="publicacionprincipal.php"><i class="fa fa-object-group"></i> Pop-up</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-file"></i> Texto Documentos</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-book"></i> Texto Legislacion</a></li>
						</ul>
					</li>
                    <li class="item-sublista" menu="4"><a href="#"><i class="fa fa-minus-square"></i> Eliminar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-minus-square"></i> Eliminar</li>
                            <li class="atras">Volver</li>
                            <li><a href="eliminarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Vinculo</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Coopteba</a></li>
                            <li><a href="eliminardoc.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="eliminardoc.php"><i class="fa fa-book"></i> Legislacion</a></li>
							<li><a href="eliminarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="eliminarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="eliminarseccion.php"><i class="fa fa-th-large"></i> Seccion</a></li>
                        </ul>
                    </li>
                    <li class="item-sublista" menu="5"><a href="#"><i class="fa fa-sort"></i> Cambiar Relevancia</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-sort"></i> Cambiar Relevancia</li>
                            <li class="atras">Volver</li>
                            <li><a href="noticiaprioridad.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="prioridadnoticiadestacada.php"><i class="fa fa-newspaper-o"></i> Noticia Destacada</a></li>
                            <li><a href="prioridadnoticiaslider.php"><i class="fa fa-newspaper-o"></i> Noticia Carrusel</a></li>
                            <li><a href="documentoprioridad.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="legislacionprioridad.php"><i class="fa fa-book"></i> Legislacion</a></li>
                        </ul>
                    </li>
                   <li class="item-sublista" menu="6"><a href="#"><i class="fa fa-question"></i> Ayuda</a>
                        <ul class="sublista">
							<li class="inicio"><i class="fa fa-question"></i> Ayuda</li>
							<li class="atras">Volver</li>
							<li menu="0"><a href="consultas.php"><i class="fa fa-wrench"></i> Consulta directa</a>
							<li menu="0"><a href="Manual.pdf" target="_blank"><i class="fa fa-file"></i> Manual</a>
						</ul>
                    </li>
					
					<li menu="0"><a href="logout.php"><i class="fa fa-times-circle"></i> Cerrar Sesion</a>
                </ul>
            </nav>
        </section>
		
		
		<header>
		<div >
			<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
			</div>
			
			<nav>
				<div class="logo"><a href="index1.php"> <img src="logonav.svg" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index1.php"><img src="icons/botonhogar5.svg" class="logo56" />INICIO</a></li>
					<li ><a href="index2.php"><img src="icons/grupo69.svg" class="logonosotros" />SOBRE NOSOTROS</a></li>
					<li ><a href="index3.php"><img src="icons/documento5.svg" class="logodocumento" />DOCUMENTOS</a></li>
					<li ><a href="index4.php"><img src="icons/comisiones5.svg" class="logocoopteba" />COMISIONES</a></li>
					<li ><a href="index5.php"><img src="icons/noticia5.svg" class="logonoticia" />NOTICIAS</a></li>
					<li ><a href="index6.php"><img src="icons/usuario5.svg" class="logocoopteba" />COOPTEBAS</a></li>
					<li ><a href="index7.php"><img src="icons/vinculo5.svg" class="logocontacto" />VINCULOS</a></li>
					<li ><a href="index8.php"><img src="icons/contacto5.svg" class="logocontacto" />CONTACTO</a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>
		<?php
			$quey="SELECT texto FROM texto WHERE localizacion='contacto'";
			
			$query2="SELECT lat,lon,mail FROM asociado WHERE categoria=0";
			
			
			require 'conection.php';
			
			$texto=mysqli_query($con,$quey) or die(mysqli_error($con));
			$texto1=mysqli_query($con,$query2) or die(mysqli_error($con));
			$fila=mysqli_fetch_array($texto);
			$fila1=mysqli_fetch_array($texto1);
		?>
		<form action="savecontacto.php" method="POST">
			<section class="mapsec" >
			<h2 class="mensaje2">Donde Contactarnos</h2>
				<textarea id="summernote" name="contact" required><?php echo $fila[0]; ?></textarea>
				<div class="popup" onclick="myFunction()">
					<span class="popuptext" id="myPopup">Este texto es "Donde contactarnos" en la pestaña de contacto </span>
				</div>
				<hr>
				<h2 class="mensaje2">Correo donde llegan todas las consultas</h2>
				<div class="editaremail" <label>Mail:</label><input class="mail" required maxlength='140' type="text" name="mail" value="<?php echo $fila1[2] ?>"></div>
				<div class="popup" onclick="myFunction2()">
					<span class="popuptext" id="myPopup2">Aqui se ingresa la direccion de mail en la cual se enviaran los mensajes del formulario en la solapa de "Contacto" </span>
				</div>				
				<hr>
				<input class="lol" type="text" id="lat" name="latitud">
				<input class="lol" type="text" id="long" name="longuitud">
				<div class="user4"><h2 class="mensaje2">Localizacion</h2><div class="userv"><i id="casitareloca" class="fa fa-home fa-3x" aria-hidden="true"></i><div class="divbonico"><input class="dire" type="text" name="dirreccion" id="address" placeholder="Direccion"/><input type="button" id="geobusca" value="&#xf002" class="fa fa-input"/></div></div><div class="botonera"><input type="button" id="mas" value="&#xf067" class="fa fa-input" readonly/><input type="button" id="menos" value="&#xf068" class="fa fa-input" readonly/></div><div id="map"></div></div>
				<div class="popup" onclick="myFunction3()">
					<span class="popuptext" id="myPopup3">Este mapa es el que aparece en la solapa de contacto obligatoriamente</span>
				</div>	
				<hr>
				<div class="botons">
					<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
					<input class="boton" type="submit" value="Cargar"/>
				</div>
			</section>
		</form>
		
		
		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Se han cargado los datos correctamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else {

			}
		</script>
		<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeDjRqDrHHpnjYrXT3lO0nwmgyNwMzcsg&callback=initMap">
		</script>
		<script
		  src="js/cargarmap.js">
		</script>
		<script>
			var map=new google.maps.Map(document.getElementById('map'),{
				center:{
					lat:<?php if(!empty($fila1[0])){echo $fila1['0'];}else{ echo "-34.6083";} ?>,
					lng:<?php if(!empty($fila[1])){echo $fila1['1'];}else{ echo "-58.3712"; } ?>
				},
				zoom:10
			});
			$("#mas").click();
			
		</script>
		<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				lang: 'es-ES',
				callbacks: {
					onImageUpload: function(files, editor, welEditable) {
						sendFile(files[0], editor, welEditable);
					}           
				}
				
			});
			function sendFile(file, url, editor) {
				data = new FormData();
				data.append("file", file);
				$.ajax({
					data: data,
					type: "POST",
					url: "subida.php",
					cache: false,
					contentType: false,
					processData: false,
					success: function(url) {
						$('#summernote').summernote('editor.insertImage', url);
					}
				});
			}
		});
		</script>
		<script>
		// When the user clicks on div, open the popup
			function myFunction() {
				var popup = document.getElementById("myPopup");
				popup.classList.toggle("show");
			}
		</script>
		<script>
		// When the user clicks on div, open the popup
			function myFunction2() {
				var popup = document.getElementById("myPopup2");
				popup.classList.toggle("show");
			}
		</script>
		<script>
		// When the user clicks on div, open the popup
			function myFunction3() {
				var popup = document.getElementById("myPopup3");
				popup.classList.toggle("show");
			}
		</script>

		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>