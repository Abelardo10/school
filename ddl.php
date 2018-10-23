<?php}

 function ddlbarrio(){

      include('conexion.php');
		 $con = new MySQL();
		 $c = $con->abrirConexion();

	        if (!$c) {
	            
	            if ($c->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
			{
			    die('Error de conexión: ' . $c->connect_error); //si hay un error termina la aplicación y mostramos el error
			}
			 
			$sql="SELECT * from tbbarrio";
			$result = $c->query($sql); //usamos la conexion para dar un resultado a la variable
			 
			if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{
			    $combobit="";
			    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
			    {
			        $combobit .=" <option value='".$row['Barrio_id']."'>".$row['barrio']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
			    }
			}
			else
			{
			    echo "No hubo resultados";
			}
			$c->close(); //cerramos la conexión
	        }
        return $combobit;
    }
    
    
		 
		

?>
