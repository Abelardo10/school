<?
$db=mysql_connect("localhost","root","12345678")or die("error conecciones base de datos");
$base=mysql_select_db('bd_amisas',$db)or die("error conectando a la base de datos");
$nbrow=0;
$cont=0;
$result=mysql_query("SELECT nombre,cedula,telefono,celular,email FROM clientes ORDER BY nombre");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="spa"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REGISTRO NUEVO CLIENTE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Email: 			info@freehtml5.co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  		<!-- Facebook -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
<!--
.Estilo6 {color: #FFFFFF; font-weight: bold; }
-->
    </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">..<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.html">INICIO</a></li>
						<li><a href="about.html">NOSOTROS</a></li>
						<li class="has-dropdown">
							<a href="services.html">SERVICIOS</a>						</li>
						<li class="has-dropdown">
							<a href="gallery.html">GALERIA</a>						</li>
						<li><a href="accesoadmin.html">INICIAR SESION</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/banqueteria-a-domicilio-1-720x540.jpg);">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><font size="+7" face="Forte">DATOS DEL CLIENTE</font></h1>
							<h2>&nbsp;</h2>
					<p align="center">
<?
echo "<table border='1' bordercolor='#ffffff' width='900'>\n";
echo "<tr aling=\"center\"><td bgcolor=\"#ffffff\"><b><font color=\"#000000\">CEDULA</font></b></td><td bgcolor=\"#ffffff\"><b><font color=\"#000000\">NOMBRE</font></b></td><td bgcolor=\"#ffffff\"><b><font color=\"#000000\">TELEFONO</font></b></td><td bgcolor=\"#ffffff\"><b><font color=\"#000000\">CELULAR</font></b></td><td bgcolor=\"#ffffff\"><b><font color=\"#000000\">EMAIL</font></b></td></tr> \n";

while($tow=mysql_fetch_array($result))
{
$nbrow++;
$cont++;

$cedula=$tow["cedula"];
$nombre=$tow["nombre"];
$telefono=$tow["telefono"];
$celular=$tow["celular"];
$email=$tow["email"];

print "<tr bgcolor=\"#ffffff\">";
print "<td aling=\"left\"><font color=\"#000000\"><font size=\"2\"><font face=\"calibri\">$cedula</font></td>";
print "<td aling=\"left\"><font color=\"#000000\"><font size=\"2\"><font face=\"calibri\">$nombre</font></td>";
print "<td aling=\"left\"><font color=\"#000000\"><font size=\"2\"><font face=\"calibri\">$telefono</font></td>";
print "<td aling=\"left\"><font color=\"#000000\"><font size=\"2\"><font face=\"calibri\">$celular</font></td>";	
print "<td aling=\"left\"><font color=\"#000000\"><font size=\"2\"><font face=\"calibri\">$email</font></td>";
print "</tr>";
}
echo "</table> \n <br>";
print "<b><font size=\"4\"><font face=\"calibri\">N&uacute;mero de cleintes registrados: $nbrow </font></b>";
?>
				
			</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

		  <div class="row copyright"></div>

		</div>
	</footer>
	</div>

	<!-- jQuery -->
<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

