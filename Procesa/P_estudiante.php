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
        $var_consulta  = "INSERT INTO tbestudiante (
        primer_nombre
        ,segundo_nombre
        ,apellido_paterno
        ,apellido_materno
        ,documento_identidad
        ,email
        ,grupo_sanguineo) VALUES ('";
        $var_consulta .= $_POST['TxtPrimer_nombre']."'
        ,'".$_POST['TxtSegundo_nombre']."'
        ,'".$_POST['TxtApellido_paterno']."'
        ,'".$_POST['TxtApellido_materno']."'
        ,".$_POST['TxtIdentificacion']."
        ,'".$_POST['TxtEmail']."'
        ,'".$_POST['ddlTipo_de_Sangre']."');";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Estudiantes.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "DELETE FROM tbestudiante WHERE  Estudiante_id = '".$_POST['TxtIde']."';"; 
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Estudiantes.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbestudiante SET primer_nombre = '".$_POST['txtPrimer_Nombre']."'
        ,nacimiento = ".$_POST['nacimiento']."
        ,raza='".$_POST['raza']."'
        ,peso='".$_POST['peso']."'
        ,sexo='".$_POST['sexo']."'
        ,talla='".$_POST['talla']."'
        ,color='".$_POST['color']."' WHERE Estudiante_id = '".$_POST['TxtId']."'";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Estudiantes.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Estudiante_id,primer_nombre,segundo_nombre,apellido_paterno
                                ,apellido_materno,documento_identidad,email,grupo_sanguineo FROM tbestudiante;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Estudiante_id"]."
                </td>
                <td>
                    ".$result["primer_nombre"]."
                </td>
                <td>
                    ".$result["segundo_nombre"]."
                </td>
                <td>
                    ".$result["apellido_paterno"]."
                </td>
                <td>
                    ".$result["apellido_materno"]."
                </td>
                 <td>
                    ".$result["documento_identidad"]."
                </td>
                 <td>
                    ".$result["email"]."
                </td>
                <td>
                    ".$result["grupo_sanguineo"]."
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

    

    function ConsultarEstudiante(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Estudiante_id,primer_nombre FROM tbestudiante;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['primer_nombre'].'_'.$result['Estudiante_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
