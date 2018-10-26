<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 
if(isset($_GET["error"]) && $_GET["error"] != "login") {
    header("Location: contact.php");
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
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
						<h1><a href="index.php"><img src="images/logo.png" width="100" height="100"></span>English School</a></h1>
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
								<li><a href="index.php">INICIO</a></li>
								<li><a href="about.php">ACERCA DE</a></li>
								<li><a href="courses.php">CURSOS</a></li>								
								<li><a class="active" href="contact.php">CONTACTENOS</a></li>
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
	<!-- Contact -->
	<div class="contact-page">
		<div class="container">
			<h5 class="main-w3l-title">Econtactenos</h5>
			<div class="form-bg">
				<form action="#" method="post">
					<div class="col-md-6 contact-fields">
						<input type="text" name="Nombre" placeholder="Nombre" required="">
					</div>
					<div class="col-md-6 contact-fields">
						<input type="email" name="Correo" placeholder="Correo" required="">
					</div>
					<div class="contact-fields">
						<input type="text" name="Tema" placeholder="Tema" required="">
					</div>
					<div class="contact-fields">
						<textarea name="Mensaje" placeholder="Mensaje" required=""></textarea>
					</div>
					<input type="submit" value="Enviar">
				</form>
			</div>
			<div class="contact-maps">
				<h5 class="main-w3l-title">Encuentranos en el mapa</h5>
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>
							Dirección 1
						</li>
						
					</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
							<div class="col-md-5 add-left">
								<p class="paragraph-agileinfo"><span>Ubicación : </span>Dg. 26b 2 #73-75, Cali, Valle del Cauca</p>
								<p class="paragraph-agileinfo"><span>Llamanos : </span>3127347172</p>
								<p class="paragraph-agileinfo"><span>correo : </span><a href="info@mitre.edu.co">info@example.com</a></p>
							</div>
							<div class="col-md-7 add-right">
								<iframe src="https://www.google.com/maps/embed?pb=" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="tab2">
							<div class="col-md-5 add-left">
								<p class="paragraph-agileinfo"><span>Location : </span>45 Rockefeller Plaza, New York, NY 10111, USA</p>
								<p class="paragraph-agileinfo"><span>Call Us : </span>000-953-456</p>
								<p class="paragraph-agileinfo"><span>Email : </span><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="col-md-7 add-right">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20335.70063503884!2d-73.99748627450514!3d40.741786138002865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fecf664df5%3A0x33d224a0d5dacca2!2sRockefeller+Center!5e0!3m2!1sen!2sin!4v1512641910229"></iframe>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab3">
							<div class="col-md-5 add-left">
								<p class="paragraph-agileinfo"><span>Location : </span>32nd Pl, Long Island City, NY 11101, USA</p>
								<p class="paragraph-agileinfo"><span>Call Us : </span>000-860-568</p>
								<p class="paragraph-agileinfo"><span>Email : </span><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="col-md-7 add-right">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.10926901785!2d-73.97583160860489!3d40.8209002394618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80a26a8cc62f2aa5!2sCity+Ice+Pavilion!5e0!3m2!1sen!2sin!4v1512641992727"></iframe>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab4">
							<div class="col-md-5 add-left">
								<p class="paragraph-agileinfo"><span>Location : </span>11 Dorrance St, Providence, RI 02903, USA</p>
								<p class="paragraph-agileinfo"><span>Call Us : </span>000-809-6193</p>
								<p class="paragraph-agileinfo"><span>Email : </span><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="col-md-7 add-right">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47576.40355278206!2d-71.45619986572248!3d41.81698718199209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e4451158a3cc03%3A0x3b88861277135d60!2sProvidence+Biltmore!5e0!3m2!1sen!2sin!4v1512642068206"></iframe>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Contact -->
	<!-- Footer -->
	<div class="footer-agileits-w3layouts">
		<div class="container">
			<div class="btm-logo-w3ls">
				<h2><a href="index.php"><img src="images/logo.png" width="100" height="100"></span>English School</a></h2>
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
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
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
</body>

</html>