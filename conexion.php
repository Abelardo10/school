<?php 
class MySQL{
    public $enlace;
    function abrirConexion(){

       $enlace = mysqli_connect("localhost", "school", "12345678", "englishschool");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        return $enlace;
    }

    function cerrarConexion(){
        mysqli_close($enlace);
    }
    

}?>