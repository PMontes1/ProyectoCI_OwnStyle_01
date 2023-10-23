<?php
session_start();

include 'Conexion.php';

$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$validar_login=mysqli_query($conexion,"SELECT * FROM usuarios 
                                       WHERE Correo='$Correo' 
                                       or Usuario='$Correo' 
                                       and Contraseña = '$Contraseña'");

if(mysqli_num_rows($validar_login)>0){
    $_SESSION['Usuario']=$Correo;
    header("location: /INTEGRADOR AVANCE/integrador avance/index.php");
}else{
    echo'
        <script>
            alert("Datos incorrectos, porfavor verifique los datos introducidos");
            window.location="../login.php";
        </script>
    ';
    exit();
}

mysqli_close($conexion);

?>