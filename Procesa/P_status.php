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
        $var_consulta  = "INSERT INTO tbstatus (
        status) VALUES ('";
        $var_consulta .= $_POST['TxtStatus']."');";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Status.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "DELETE FROM tbstatus WHERE  Status_id = ".$_POST['TxtId'].";"; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Status.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbstatus SET status = '".$_POST['TxtStatus']."'
        WHERE Status_id = '".$_POST['TxtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Status.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Status_id,status FROM tbstatus;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Status_id"]."
                </td>
                <td>
                    ".$result["status"]."
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

    

    function ConsultarStatus(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Status_id,status FROM tbstatus;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['status'].'_'.$result['Status_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
