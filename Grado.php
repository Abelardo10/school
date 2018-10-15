<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
								<li><a href="index.html">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Maestros</a></li>
										<li><a href="#">Estudiantes</a></li>
										<li><a href="#">Competencias</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="courses.html">Courses</a></li>
								
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
		
			<h5 class="main-w3l-title">Estudiantes</h5>
			
			<div class="container">				

					<form id="FrmEstudiantes" action="Procesa/P_estudiante.php?metodo=save" method="post" style="background-color: #f5f5f5;padding: 5px; margin:20px">

						<div class="card-header"><h1>Registrar Grado</h1></div>

						<div class="form-group">
							 <div class="row"><!--primera fila-->   							 
							<div class="col-md-6 container">	

								<div class="form-group">
								<input type="text" name="TxtPrimer_Nombre" id="TxtPrimer_Nombre" class="form-control" placeholder="Primer Nombre" required="Campo Requerido">
								</div>

								<div class="form-group">
								<input type="text" name="TxtSegundo_Nombre" id="TxtSegundo_Nombre" class="form-control" placeholder="Segundo Nombre">
								</div>

								<div class="form-group">
								<input type="text" name="TxtApellido_Paterno" id="TxtApellido_Paterno" class="form-control" placeholder="Apellido Paterno" required="Campo Requerido">
								</div>

								<div class="form-group">
								<input type="text" name="TxtApellido_Materno" id="TxtApellido_Materno" class="form-control" placeholder="Apellido Materno">
								</div>

								<div class="form-group">
								<input type="number" name="TxtIdentificacion" id="TxtIdentificacion" class="form-control" maxlength="10" minlength="8" placeholder="Identificación">
								</div>
							</div>
							

							   							 
							<div class="col-md-6 container">	

								<div class="form-group">
								<input type="email" name="TxtEmail" id="TxtEmail" class="form-control" placeholder="E-mail">
								</div>

								 <div class="form-group">
							          <label for="Sexo">Tipo de Sangre</label>
							          <select class="form-control" id="ddlTipo_de_Sangre" name="ddlTipo_de_Sangre">
							            <option value="select">Seleccione...</option>
							            <option value="A+">A+</option>
							            <option value="A-">A-</option> 
							            <option value="B+">B+</option> 
							            <option value="B-">B-</option> 
							            <option value="O+">O+</option> 
							            <option value="AB+">AB+</option> 
							            <option value="AB-">AB-</option>            
							          </select>
							     </div>

								 <div class="form-group">
							          <label for="Sexo">Grado</label>
							          <select class="form-control" id="ddlGrado" name="ddlGrado">
							            <option value="select">Seleccione...</option>
							                       
							          </select>
							     </div>

								<div class="form-group">
							          <label for="Sexo">Barrio</label>
							          <select class="form-control" id="ddlBarrio" name="ddlBarrio">
							            <option value="select">Seleccione...</option>
							                       
							          </select>
							     </div>

								
							</div>
						</div>	<!--fin segunda fila-->						
					</div>
						
 					<input type="submit" class="btn btn-primary btn-block"></input>

					</form>
				
				
			</div>
			
			<div class="clearfix"></div>
		</div>
		 <div class="row">
      <div class="col-sm-10 container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Primer Nomre</th>
              <th scope="col">Segundo Nombre</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Identificación</th>
              <th scope="col">E-mail</th>
              <th scope="col">Grupo Sanguineo</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
                           
            </tr>
          </thead>
          <tbody id="t_estudiante" >
          </tbody>
      </table>
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
      $("#ide").val(dato.Estudiante_id);
      $("#id").val(dato.Estudiante_id);
      $("#TxtPrimer_Nombre").val(dato.primer_nombre);
      $("#TxtSegundo_Nombre").val(dato.segundo_nombre);
      $("#TxtApellido_Paterno").val(dato.apellido_paterno);
      $("#TxtApellido_Materno").val(dato.apellido_materno);
      $("#TxtIdentificacion").val(dato.documento_identidad);
      $("#TxtEmail").val(dato.email);
      $("#ddlTipo_de_Sangre").val(dato.grupo_sanguineo);
  


    }

    function consultar()
    {     
            $.ajax({
              type : "POST",
              url : "Procesa/P_estudiante.php?metodo=listar",
              data : { 
                                                        
              },
              success : function( data ){
              $('#t_estudiante').html(data);

              }
            });         
    }

    function eliminar()
    {     
     

            $.ajax({
              type : "POST",
              url : "Procesa/P_estudiante.php?metodo=eliminar",
              data : { 
                                                        
              },
              success : function( data ){
              $('#t_estudiante').html(data);

              }
             
            });         
    }
    </script>
</body>

</html>