<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<<?php 

if(isset($_GET["error"]) && $_GET["error"] != "login") {
        header("Location: Login.php");

    }    
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

    <script language="javascript">
    function NoBack(){
        history.go(1);      
    }
</script>

</head>


<body>
    <h1>English School</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="../Procesa/P_login.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" required="required" />
                </div>
            </div>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            
            <button pe="submit" name="btn_Login" id="btn_Login"  class="btn btn-primary btn-lg btn-block">Login</button>        

            
        </form>
       
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </footer>

</body>

</html>