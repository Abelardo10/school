<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>English School</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Institute Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Style-sheets -->
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
	<!-- banner -->
	<div class="banner inner-banner" id="home">
		<div class="container">
			<!-- header -->
			<header>

				<div class="header-bottom-w3layouts">
					<div class="main-w3ls-logo">
						<h1><a href="index.html"><img src="images/logo.png" width="100" height="100"></span>English School</a></h1>
					</div>
					<!-- navigation -->
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">		
							<li><a href="Principal.php">Principal</a></li>						
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="Docente.php">Docentes</a></li>
										<li><a href="Estudiantes.php">Estudiantes</a></li>
										<li><a href="Acudiente.php">Acudiente</a></li>
										<li><a href="#">Competencias</a></li>										
										<li><a href="Barrio.php">Barrios</a></li>
										<li><a href="Rol.php">Rol</a></li>
										<li><a href="Status.php">Estatus</a></li>
									</ul>
								</li>								
								<li class="dropdown">
				                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				                    </a>
				                    <ul class="dropdown-menu dropdown-user">				                       
				                        <li><a href="Salir.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar secion</a>
				                        </li>
				                    </ul>
                    					<!-- /.dropdown-user -->
               				 	</li>	
							</ul>

						</div>
						<!-- /.navbar-collapse -->

					</nav>
					<div class="search-agile-bar">
						<div class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul>
							<!-- cd-header-buttons -->
						</div>
						<div id="cd-search" class="cd-search">
							<form action="#" method="post">
								<div class="agileits-search-field">
									<input name="Search" type="search" placeholder="Click enter after typing...">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- //navigation -->
			</header>
			<!-- //header -->
		</div>
	</div>
	<!-- //banner -->
	<!-- Institutes -->

	<div class="gallery">
		<div class="col-md-3"></div>
		<div class="col-md-6">	
		<div class="panel panel-default">
		  <div class="panel-heading"><h5 class="main-w3l-title"><center>Registrar Grados</center></h5></div>
		  	<div class="panel-body">
    			<div class="container">	
    				<form id="FrmGrado" action="Procesa/P_grado.php?metodo=save" method="post" >						
							<div class="form-group">
								<div class="row"><!--primera fila-->   							 
									<div class="col-md-6 container">								
										<input type="hidden" name="TxtId" id="TxtId" class="form-control" placeholder="IdGrado" enable="false">
									
										<div class="col-md-12">
										<div class="form-group" style="margin-top: 2em">
											<input type="text" name="TxtGrado" id="TxtGrado" class="form-control" placeholder="Grado" required="Campo Requerido">
										</div>

										<input type="submit" class="btn btn-primary btn-block" value="Guardar"></input>
	 					 				<button type="input" onclick="sendTd(this)" class="btn btn-primary btn-block" style="margin-top: 1em">Cancelar</button>
									</div>
									</div>						   							 
							
								</div>	<!--fin segunda fila-->						
							</div>

					</form>
    			</div>
    		</div>
    	</div>
   </div>
<div class="col-md-3"></div>

		<div class="col-md-12">	
			<div class="panel panel-default">
			  <div class="panel-heading"><h2 class="main-w3l-title"><center>Registros de Estudiantes</center></h2></div>
			  	<div class="panel-body">
	    			<div class="container">	
	    				<div class="table-responsive">
	    				<table class="table table-striped table-bordered">
				          <thead>
				            <tr>
				              <th scope="col">#</th>
				              <th scope="col">Grado</th>                            
				              <th scope="col">Editar</th>
				              <th scope="col">Eliminar</th>
				                           
				            </tr>
				          </thead>
				          <tbody id="t_grado" >
				          </tbody>
				      </table>
      				</div>
	    			</div>
	    		</div>
	    	</div>
    	</div>
	

 <div class="row">
		 	
      <div class="col-sm-12">
      
        
  
    </div>
   			 
  </div>

	<!--// Institutes -->

	<!-- Footer -->
	<div class="footer-agileits-w3layouts">
		<div class="container">
			<div class="btm-logo-w3ls">
				<h2><a href="index.html"><img src="images/logo.png" width="100" height="100"></span>English School</a></h2>
			</div>
			

			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copyright-w3layouts">
		<div class="container">
			<p>&copy; 2018 English School . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
		</div>
	</div>
	<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->


	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>

	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- Gallery-script -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.gallery-columns a').simpleLightbox();
	</script>
	<!-- //Gallery-script -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->

	 <script language="JavaScript">

	 	

     $( document ).ready(function() {
            consultar();
        });

    function editar(dato){
      $("#TxtId").val(dato.Grado_id);            
      $("#TxtGrado").val(dato.grado);     
     
    }

    function consultar()
    {     
            $.ajax({
              type : "POST",
              url : "Procesa/P_grado.php?metodo=listar",
              data : { 
                                                        
              },
              success : function( data ){
              $('#t_grado').html(data);

              }
            });         
    }
		
    function eliminar()
    {          
    	var id = $("#TxtId").val();
    	
    	    $.ajax({
    	    	
              type : "POST",
              url : "Procesa/P_grado.php?metodo=eliminar",
              data : { id
                                                        
              },
              success : function( data ){
              $('#t_grado').html(data);

              }
             
            }); 

    }
    function sendTd(form)
        {   
       		 
        $.ajax({
        	type : "get",
              url : "#",
              data : {                                                    
              },              
        });              
        }
    </script>
</body>

</html>