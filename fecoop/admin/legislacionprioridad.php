<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
		<title>Prioridad Legislacion</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		<link href="estilo3.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<meta charset="windows-1252">
		<link rel="stylesheet" href="styleuser.css"/>
		<script src="jquery-3.2.1.js"></script>
		<script src="notify.js"></script>
		<style>
            
            tr{cursor: pointer}
            
            .selected{background-color: red; color: #fff;font-weight: bold}
            
           
          button img{width:100%;height:100%;-webkit-filter: invert(1) ;filter: invert(1);}
        </style>
		
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		
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

		<form action="changeprioridaddoc.php?ant=legis" method="POST">
            <div class="priotabla">
			<table id="tabla" class="newtabla">
				<tr>
					<th>Nombre Documento</th>
					<th>Ver Doc</th>
				</tr>
				<?php
					require 'conection.php';
					$sql1 = "SELECT id_documento,nombre,rutadoc,prioridad FROM documento WHERE categoria=2 ORDER BY prioridad DESC";
					$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
					while($asociado = mysqli_fetch_array($texto2)){
						echo "<tr id='".$asociado['0']."' data-prioridad='".$asociado['3']."'><td id='tex1'><p>".$asociado['1']."</p></td><td id='tex2'><a href='".$asociado['2']."'>Ver</a></td><td><input id='".$asociado[0]."".$asociado[0]."' type='hidden'  name='amodificar[]'/></td></tr>";
					}
				?>
				
            </table>
            </div>
			<div class="popup" onclick="myFunction()">
				<span class="popuptext" id="myPopup">Para cambiar de prioridad seleccione un documento haciendo click y utilice los botones de arriba y abajo</span>
			</div>
			<div class="botons">
				<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
				<input class="boton" type="submit" value="Cargar"/>
			
        </form>
        </div>
		<div class="botons1">
			<button class="dejendeponerlosstyleenelindex" onclick="upNdown('up');"><img src="icons/up.png"></button>
			<button class="dejendeponerlosstyleenelindex" onclick="upNdown('down');"><img src="icons/down.png"></button>
		</div>
		
		<script>
            
            var index;	// variable to set the selected row index
            function getSelectedRow()
            {
                var table = document.getElementById("tabla");
                for(var i = 1; i < table.rows.length ; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        // clear the selected from the previous selected row
                        // the first time index is undefined
                        if(typeof index !== "undefined"){
                            table.rows[index].classList.toggle("selected");
                        }
                       
                        index = this.rowIndex;
                        this.classList.toggle("selected");

                    };
                }
                    
            }
			
			
  

            getSelectedRow();
		
            
            
            function upNdown(direction)
            {
                var rows = document.getElementById("tabla").rows,
                    parent = rows[index].parentNode;
                 if(direction === "up")
                 {
                     if(index > 1){
						var x=parseInt(rows[index - 1].getAttribute('data-prioridad'));
						rows[index].setAttribute("data-prioridad",String(x+1));
						var nome=rows[index].id;
						console.log(nome);
						document.getElementById(nome+nome).value=nome+"-"+String(x+1);
						
						
						
						
                        parent.insertBefore(rows[index],rows[index - 1]);
						
						
                        // when the row go up the index will be equal to index - 1
                        index--;
                    }
                 }
                 
                 if(direction === "down")
                 {
                     if(index < rows.length -1){
						var x=parseInt(rows[index + 1].getAttribute('data-prioridad'));
						rows[index].setAttribute("data-prioridad",String(x-1));
						var nome=rows[index].id;
						document.getElementById(nome+nome).value=nome+"-"+String(x-1);
						console.log(document.getElementById(nome+nome).value);
                        parent.insertBefore(rows[index + 1],rows[index]);
                        // when the row go down the index will be equal to index + 1
                        index++;
                    }
                 }
            }
            
        </script>
		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Los datos se han cambiado exitosamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else if (nombrevar == 3){
				$.notify("No ha ocurrido ningun cambio","warn");
			}
			else {

			}
		</script>
		<script>
		// When the user clicks on div, open the popup
			function myFunction() {
				var popup = document.getElementById("myPopup");
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