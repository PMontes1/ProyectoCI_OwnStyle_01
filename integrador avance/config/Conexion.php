<?php

$Server ="localhost";
$user = "root";
$pass = "";
$db="ownstyle";

$conexion = mysqli_connect($Server, $user, $pass, $db );


/*if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}else{
    echo("Conexion exitosa");
}
    
?>*/