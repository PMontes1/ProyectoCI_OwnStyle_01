<?php
include 'Conexion.php';

$NombreCompleto = $_POST['NombreCompleto'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];


$ContraseñaHash= password_hash ($Contraseña, PASSWORD_BCRYPT);
//BCRYPT es el algoritmo de encriptacion, devuelve una cadena de 60 caracteres

$query = "INSERT INTO usuarios(NombreCompleto, Correo, Usuario, Contraseña) 
          VALUES('$NombreCompleto', '$Correo', '$Usuario', '$ContraseñaHash')";

//Verificar que el correo no se repita en la bd
$verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios 
                                         WHERE Correo='$Correo' ");

if(mysqli_num_rows($verificar_correo)>0){
    echo'
        <script>
            alert("Este correo ya esta registrado, intenta con uno diferente");
            window.location="../login.php";
        </script>
    ';
    exit();
}
//Verificar que el usuario no exista en la bd
$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios 
                                         WHERE Usuario='$Usuario' ");

if(mysqli_num_rows($verificar_usuario)>0){
    echo'
        <script>
            alert("Este usuario ya esta existe, intenta con uno diferente");
            window.location="../login.php";
        </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion,$query);

if ($ejecutar) {
    echo'
        <script>
            alert("Usuario registrado exitosamente");
            window.location="../login.php";
        </script>
    ';
}else{
    echo'
        <script>
          alert("Intentelo de nuevo, registro de usuario no exitoso");
            window.location="../login.php";
        </script>
    ';
}mysqli_close($conexion);


/*
if(!$consultaUsuario){//si consulta esta vacia
    $query = "INSERT INTO usuarios(NombreCompleto, Correo, Usuario, Contraseña) 
          VALUES('$NombreCompleto', '$Correo', '$Usuario', '$ContraseñaHash')";
    //EJECUTAMOS Y VERIFICAMOS SI SE GUARDARON LOS DATOS
    if (mysqli_query($conexion, $query)) {
        echo'
            <script>
                alert("Usuario registrado exitosamente");
                window.location="../index.php";
            </script>
        ';
    }else{
        echo'
            <script>
              alert("Intentelo de nuevo, registro de usuario no exitoso");
                window.location="../index.php";
            </script>
        ';
    }
}else{
    echo'
            <script>
              alert("El usuario ya existe, intenta con uno diferente");
                window.location="../index.php";
            </script>
        ';
}*/

?>

