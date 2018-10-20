<?php

 include("../conexion.php");
session_start();
$userok;
$passok;


     if(isset($_POST["btn_Login"])) {
 
               $loginNombre = trim($_POST["txtUsuario"]);
               $loginPassword = trim($_POST["txtPassword"]);

                 
 
               $var_consulta = "SELECT usuario, password, Status_id, Rol_id FROM tblogin WHERE usuario='".htmlentities($loginNombre)."' 
               AND password='".htmlentities($loginPassword)."'";

                $con = new MySQL();
                  $c = $con->abrirConexion();            
                 
                  $query = mysqli_query($c, $var_consulta);

               
                    while($row = $query->fetch_array()) {
 
                         $userok = $row["usuario"];
                         $passok = $row["password"];
                        // $_SESSION["Rol_id"]=$row["Rol"];

                    }
 
 
               if(isset($loginNombre) && isset($loginPassword)) {
 
                    if($loginNombre == $userok && $loginPassword == $passok) {
 
                         //session_start();
                         $_SESSION["logueado"] = TRUE;
                          $_SESSION["autentica"] = "SIP";
                          $_SESSION["usuarioactual"] = $userok; //nombre del usuario logueado.
                         header("Location: ../Principal.php");
 
                    }
                    else {
                          
                         Header("Location: /Login/Login.php?error=login");

                    }
 
               }
 
          } else {
               //echo "<script type=\"text/javascript\">alert(\"Hola mundo\");</script>";
               header("Location: ../index.php");
          }
 
 ?>
