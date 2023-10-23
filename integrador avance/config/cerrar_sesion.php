<?php
// Inicia la sesión
session_start();

// Verifica si hay una sesión iniciada
if(isset($_SESSION['Usuario'])){
    // Destruye la sesión
    session_destroy();
    echo '
        <script>
            alert("Sesion cerrada correctamente");
        </script>
    ';
} else {
    echo '
        <script>
            alert("No hay ninguna sesión iniciada.");
            window.location="../login.php";
        </script>
    ';
}

// Redirecciona al usuario a la página de inicio de sesión
header("location: /INTEGRADOR AVANCE/integrador avance/index.php");
?>