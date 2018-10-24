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
    }if($_REQUEST['metodo'] == "ConsultarBarrio"){

          ConsultarBarrio();

    }else{
        listar();
    }
    if($_REQUEST['metodo'] == "eliminar" ){ 
                       
            eliminar();        
    }
 
     
    function guardar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "INSERT INTO tbbarrio (
        barrio
       ) VALUES ('";
        $var_consulta .= $_POST['TxtBarrio']."');";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Barrio.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();     
        $var_consulta  = "DELETE FROM tbbarrio WHERE  Barrio_id =" .$_REQUEST['id']; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Barrio.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbbarrio SET barrio = '".$_POST['TxtBarrio']."'
        WHERE Barrio_id = '".$_POST['TxtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Barrio.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Barrio_id,barrio FROM tbbarrio;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Barrio_id"]."
                </td>
                <td>
                    ".$result["barrio"]."
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

    

    function ConsultarGrado(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Barrio_id,grado FROM tbbarrio;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['barrio'].'_'.$result['Barrio_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
