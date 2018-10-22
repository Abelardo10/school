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
    }if($_REQUEST['metodo'] == "ConsultarDocente"){

          ConsultarDocente();

    }else{
        listar();
    }
    if($_REQUEST['metodo'] == "eliminar"){
       
        eliminar();
    }
 
     
    function guardar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "INSERT INTO tbdocente (
         primer_nombre
        ,segundo_nombre
        ,apellido_paterno
        ,apellido_materno
        ,tipo_documento
        ,documento_identidad
        ,email
        ,grupo_sanguineo
        ) VALUES ('";
        $var_consulta .= $_POST['TxtPrimer_Nombre']."'
        ,'".$_POST['TxtSegundo_Nombre']."'
        ,'".$_POST['TxtApellido_Paterno']."'
        ,'".$_POST['TxtApellido_Materno']."'
        ,'".$_POST['ddlTipo_de_Documento']."'
        ,".$_POST['TxtIdentificacion']."
        ,'".$_POST['TxtEmail']."'
        ,'".$_POST['ddlTipo_de_Sangre']."'      

        );";
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Docente.php?"); 
    }

    function eliminar(){
        $con = new MySQL();
        $c = $con->abrirConexion();        
        $var_consulta  = "DELETE FROM tbdocente WHERE  Docente_id == ".$_POST['TxtId'].";"; 
        $c->query($var_consulta);        
        $con->cerrarConexion();
        header("Location: ../Docente.php?"); 
    }



    function actualizar(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "UPDATE tbdocente 
        SET primer_nombre = '".$_POST['TxtPrimer_Nombre']."'
        ,segundo_nombre = '".$_POST['TxtSegundo_Nombre']."'
        ,apellido_paterno='".$_POST['TxtApellido_Paterno']."'
        ,apellido_materno='".$_POST['TxtApellido_Materno']."'
        ,tipo_documento='".$_POST['ddlTipo_de_Documento']."'
        ,documento_identidad=".$_POST['TxtIdentificacion']."
        ,email='".$_POST['TxtEmail']."'
        ,grupo_sanguineo='".$_POST['ddlTipo_de_Sangre']."'         
        WHERE Docente_id = ".$_POST['TxtId'].";";  
        $c->query($var_consulta);
        $con->cerrarConexion();
        header("Location: ../Docente.php?"); 
    }

    function listar(){

        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Docente_id,primer_nombre,segundo_nombre,apellido_paterno
                                ,apellido_materno, tipo_documento,documento_identidad,email,grupo_sanguineo FROM tbdocente;";  
       
        $query = mysqli_query($c, $var_consulta);
        while($result = mysqli_fetch_array($query))
        {
          echo "<tr>
                <td>
                    ".$result["Docente_id"]."
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
                    ".$result["tipo_documento"]."
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
                
                 echo"<td>  <button class='btn btn-primary'  onclick='editar(".json_encode($result).")'>Editar </button> </td>";
                     echo"<td>  <button class='btn btn-primary'  onclick='eliminar(".json_encode($result).")'>Eliminar </button> </td>";

                if($_SESSION["rol"] === $_SESSION["tipou"]){                   

                }

                echo "</tr>";
        }
        $con->cerrarConexion();
    }

    

    function ConsultarDocente(){
        $con = new MySQL();
        $c = $con->abrirConexion();
        $var_consulta  = "SELECT Docente_id,primer_nombre FROM tbdocente;";  
       
        $query = mysqli_query($c, $var_consulta);
        $rows = array();

        while($result = mysqli_fetch_array($query))
        {
            $rows[] =  $result['primer_nombre'].'_'.$result['Docente_id'];

        }

        $jarray = ["datos"=>$rows];


        print json_encode($jarray);
    }


?>
