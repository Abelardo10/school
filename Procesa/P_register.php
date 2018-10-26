<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 session_start();

 include('../conexion.php');

    if($_REQUEST['metodo'] == "save"){

        if($_REQUEST['TxtId'] != ""){
            actualizar();
        }else{
            guardar();
        }
    }if($_REQUEST['metodo'] == "ConsultarGrado"){

          ConsultarGrado();

    }else{
        listar();
    }
    if($_REQUEST['metodo'] == "eliminar" ){ 
                       
            eliminar();        
    }
 
     
    function guardar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "INSERT INTO tblogin (
        usuario
        ,password
        ,Status_id
        ,Rol_id
       ) VALUES ('";
        $var_consulta .= $_POST['TxtUsuario']."'
        ,'".$_POST['TxtPassword']."'
        ,".$_POST['ddlStatus']."
        ,".$_POST['ddlRol']."
    );";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Register.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();     
        $var_consulta  = "DELETE FROM tblogin WHERE  Login_id =" .$_REQUEST['id']; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Register.php"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tblogin 
        SET usuario = '".$_POST['TxtUsuario']."'
        ,password = '".$_POST['TxtPassword']."'
        ,Status_id = '".$_POST['ddlStatus']."'
        ,Rol_id = '".$_POST['ddlRol']."'
        WHERE Login_id = '".$_POST['TxtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Register.php"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Login_id,usuario,password,Status_id,Rol_id FROM tblogin;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Login_id"]."
                </td>
                <td>
                    ".$result["usuario"]."
                </td> 
                
                 <td>
                    ".$result["Status_id"]."
                </td>  
                <td>
                    ".$result["Rol_id"]."
                </td>                

                ";
 echo"<td>  <button class='btn btn-primary'  onclick='editar(".json_encode($result).")'>Editar </button> </td>";
           
                     echo"<td>  <button class='btn btn-primary'  onclick='eliminar (id=".json_encode($result).")'>Eliminar </button> </td>";
                //if($_SESSION["rol"] === $_SESSION["tipou"]){
                   
               // }

                echo "</tr>";
        }
        
        $con->cerrarConexion();
    }

    


?>
