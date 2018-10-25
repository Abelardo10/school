<?php

 include("../conexion.php");
session_start();

//variables globales
$userok;
$passok;
$rol;
$status;


     if(isset($_POST["btn_Login"])) {
      // trim es para eliminar los espacios que hay a la izquierda y la derecha de la caja de texto
 
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
                         $rol=$row["Rol_id"];
                         $status =$row["Status_id"];

                    }
 
 
               if(isset($loginNombre) && isset($loginPassword)) {
 
                    if($loginNombre == $userok && $loginPassword == $passok) {
 
                         session_start();                                                  
                          $_SESSION["user_session"] = $loginNombre; //nombre del usuario logueado.
                          $rol["rol"] = $rol; //Rol del usuario logueado
                          $status["rol"] = $status; //status del usuario logueado
                         header("Location: ../Principal.php");
 
                    }
                    else {
                     
                          
                         Header("Location: ../Login/Login.php?error=login");
                         echo "<script type=\"text/javascript\">alert(\"Usuario or Password Incorrecto\");</script>";
                         

                    }
 
               }
 
          } else {
               //echo "<script type=\"text/javascript\">alert(\"Hola mundo\");</script>";
               header("Location: ../index.php");
          }
 
 ?>
