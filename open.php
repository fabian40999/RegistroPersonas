<?php

    $conexion = new mysqli("localhost","root","","registro");

    if($conexion){
        echo "conexion exitosa"; 
    }else{
        echo "fallo en el sistema";
    }


?>