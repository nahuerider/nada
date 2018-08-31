<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<link rel="icon" href="admin/favicon.png" type="admin/image/x-icon"/>
		<script src="admin/jquery-3.2.1.js"></script>
        <script src="admin/main.js"></script>
        <link rel="stylesheet" href="admin/styleuser.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
        <style>
            .slidesjs-container{
				width:100%!important;
			}
			.slidesjs-control{
				width:100%!important;
			}
			.chiquito{
				width:30px;
				height:30px;
			}
			
			/* Estilos del modal*/
			
			/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 100000000000000000; /* Sit on top */
				padding-top: 100px; /* Location of the box */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; /* Enable scroll if needed */
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content */
			.modal-content {
				background-color: #fefefe;
				margin: auto;
				padding: 20px;
				border: 1px solid #888;
				width: 80%;
			}

			/* The Close Button */
			.close {
				color: #aaaaaa;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}
			.close2{
				float:right;
				font-size:18px;
			}

			.close:hover,
			.close:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
			.note-video-clip{
			width:100%;
			}
            </style>
            	 <!-- Bootstrap core CSS     -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

	
		
</head>
<body>
<?php
	require "admin/functiones.php";
	
?>


		<?php 
		require 'admin/conection.php';
		$sql = "SELECT id_noticia,titulo,sinopsis,portada FROM noticia WHERE slider=1 ORDER BY prioridad DESC LIMIT 8";
		$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
		if(count($texto)!=0  && mysqli_num_rows($texto)>=2){
			echo "<div class='main'><section class='slides'>";
			while($noticiaslider = mysqli_fetch_array($texto)){
				
				echo "<div class='sliderpadre'> 
						<img src='".$noticiaslider['3']."' alt='imagen noticia' />
							<div class='sliderecuadro' ><h2>".cortar($noticiaslider['1'],50)."</h2>
								<p>".cortar($noticiaslider['2'],100)."</p>
									<a href='display.php?noticia=".$noticiaslider['0']."'' class='link3'>Ver Mas</a>
							</div>
						</div>";
			}
			echo "</section></div>";
			
		}	
		?>
        
        <script>
		    
		    $(document).ready(function() {
              $('img').each(function() {
                var srcx = $(this).attr('src');
                
                $(this).attr('onerror', this.src='admin/'+srcx);
              });
            });
		</script>
		<script src="admin/js/jquery.slides.js"></script>
		<script >
			$(function(){
			  $(".slides").slidesjs({
				play: {
				  active: true,
					// [boolean] Generate the play and stop buttons.
					// You cannot use your own buttons. Sorry.
				  effect: "slide",
					// [string] Can be either "slide" or "fade".
				  interval: 3000,
					// [number] Time spent on each slide in milliseconds.
				  auto: true,
					// [boolean] Start playing the slideshow on load.
				  swap: true,
					// [boolean] show/hide stop and play buttons
				  pauseOnHover: false,
					// [boolean] pause a playing slideshow on hover
				  restartDelay: 2500
					// [number] restart delay on inactive slideshow
				}
			  });
			});
					
		</script>
		<script>
			var modal = document.getElementById('myModal');
			var span;
			
			 


			
			$( document ).ready(function() {
				modal.style.display = "block";
				var tm=setInterval(function(){ countdown(); },1000);
				
				function countdown() {

				var i = document.getElementById('cierrate');
				i.classList.remove('close');
				i.innerHTML = parseInt(i.innerHTML)-1;

				 if (parseInt(i.innerHTML)<=0) {

				  i.innerHTML="&times;";
				  i.classList.add("close");
				  span = document.getElementsByClassName("close")[0];
				  span.onclick = function() {
						modal.style.display = "none";
					}
				  clearInterval(tm);
					
				 }
				}
				
			});
			
			
		
		</script>
</body>
</html>