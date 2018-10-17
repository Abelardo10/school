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
    }if($_REQUEST['metodo'] == "ConsultarGrado"){

          ConsultarGrado();

    }else{
        listar();
    }
    if($_REQUEST['metodo'] == "eliminar"){

        eliminar();
    }
 
     
    function guardar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "INSERT INTO tbgrado (
        grado
       ) VALUES ('";
        $var_consulta .= $_POST['txtGrado']."');";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Grado.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "DELETE FROM tbgrado WHERE  Grado_id = '".$_POST['txtIde']."';"; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Grado.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbgrado SET grado = '".$_POST['txtGrado']."'
        WHERE Grado_id = '".$_POST['txtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Grado.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Grado_id,grado FROM tbgrado;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Grado_id"]."
                </td>
                <td>
                    ".$result["grado"]."
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

    

    function ConsultarGrado(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Grado_id,grado FROM tbgrado;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['grado'].'_'.$result['Grado_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
