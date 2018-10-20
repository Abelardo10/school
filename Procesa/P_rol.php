<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 session_start();

 include('../conexion.php');

    if($_REQUEST['metodo'] == "save"){

        if($_REQUEST['id'] != ""){
            actualizar();
        }else{
            guardar();
        }
    }if($_REQUEST['metodo'] == "ConsultarEstudiante"){

          ConsultarEstudiante();

    }else{
        listar();
    }
    if($_REQUEST['metodo'] == "eliminar"){

        eliminar();
    }
 
     
    function guardar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "INSERT INTO tbrol (
        rol) VALUES ('";
        $var_consulta .= $_POST['TxtRol']."');";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Rol.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "DELETE FROM tbrol WHERE  Rol_id = ".$_POST['TxtId'].";"; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Rol.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbrol SET rol = '".$_POST['txtRol']."'
        WHERE Rol_id = '".$_POST['TxtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Rol.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Rol_id,rol FROM tbrol;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Rol_id"]."
                </td>
                <td>
                    ".$result["rol"]."
                </td>               

                ";
                
                if($_SESSION["rol"] === $_SESSION["tipou"]){
                    echo"<td>  <button class='btn btn-primary'  onclick='editar(".json_encode($result).")'>Editar </button> </td>";
                     echo"<td>  <button class='btn btn-primary'  onclick='eliminar(".json_encode($result).")'>Eliminar </button> </td>";

                }

                echo "</tr>";
        }
        $con->cerrarConexion();
    }

    

    function ConsultarRol(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Rol_id,rol FROM tbrol;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['rol'].'_'.$result['Rol_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
