<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" type="text/css" href="Css/tienda.css">
    <script src="JS/index.js" defer></script>
    <script src="https://kit.fontawesome.com/15feb8d600.js" crossorigin="anonymous"></script>
    <title>Own Style</title>
</head>


<body>
    <header class="header">
        <div class="header__left">
            <ul class="sm-content">
                <li class="sm sm-instagram"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="sm sm-facebook"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="sm sm-youtube"><a href="$"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="header__center">
            <div class="logo-content">
                <a href="#">
                    <img src="img/logoheader.png" alt="Logo de Secrets & Details" />
                </a>
            </div>
        </div>
        <div class="header__right">
            <div class="info-content">
                <a href="#" class="wsp-link">
                    <i class="fa-brands fa-whatsapp"></i>
                    <p>+51 956916201</p>
                </a>
            </div>
        </div>
    </header>
    <nav class="navbar">
        <ul class="navbar__links">
            <li class="navbar__link"><a href="index.php">Inicio</a></li>
            <li class="navbar__link"><a href="nosotros.php">Nosotros</a></li>
            <li class="navbar__link"><a href="tienda.php">Tienda</a></li>
            <li class="navbar__link"><a href="personalizado.php">Personalizado</a></li>
            <li class="navbar__link"><a href="contacto.php">Contacto</a></li>
            <ul class="menu-horizontal">
                    <li><a href="$"><i class="fa-regular fa-user"></i></a>
                        <ul class="menu-vertical">
                            <li><a href="login.php">INICIAR SESION</a></li>
                            <li><a href="login.php">REGISTRARSE</a></li>
                            <li><a href="config/cerrar_sesion.php">CERRAR SESION</a></li>
                        </ul>
                    </li>
                </ul>
        </ul>

        <button class="navbar__toggler" type="button" title="navbar__toggler-btn">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </button>
    </nav>

    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

    <section class="seccion1">
        <div class="texto-banner">
            <h1>Descubre tu propio estilo</h1>
            <p>Explora nuestra colección única de ropa a la moda al alcance de tu inspiracion</p>
            <a href="#" class="boton">Comenzar</a>
        </div>
    </section>

    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

    <section class="nosotros">
        <div class="container">
            <h2>Acerca de nosotros</h2>
            <p>Own Style es más que una marca de ropa; es una expresión de tu propio estilo y personalidad. Creemos que
                la moda es una forma de empoderamiento, y nuestro objetivo es brindarte la libertad de crear prendas
                únicas que reflejen quién eres.</p>

            <p>Nuestro nombre, "OwnStyle", representa precisamente eso: tu propio estilo. Queremos que te sientas libre
                de ser tú mismo y de destacar entre la multitud, sin importar las tendencias actuales. Con OwnStyle,
                puedes personalizar tus diseños de ropa de manera única y auténtica.</p>


            <ul>
                <p>Lo que nos distingue:</p>
                <p>
                    <strong>Personalización sin límites:</strong> En OwnStyle, te ofrecemos la capacidad de personalizar
                    cada detalle de tus prendas, desde colores hasta los patrones y los cortes. Tu creatividad es el
                    límite.
                </p>
                <p>
                    <strong>Calidad excepcional:</strong> Nos enorgullecemos de utilizar materiales de la más alta
                    calidad y de confeccionar cada prenda con cuidado y atención al detalle.
                </p>
                <p>
                    <strong>Moda sostenible:</strong> Creemos en la moda sostenible y trabajamos constantemente para
                    reducir nuestro impacto ambiental. Nuestras prendas están diseñadas para durar y resistir las
                    tendencias pasajeras.
                </p>
                <p>
                    <strong>Comunidad OwnStyle:</strong> Únete a una comunidad de amantes de la moda que valoran la
                    individualidad y la creatividad. Comparte tus creaciones y encuentra inspiración en otros
                    diseñadores de OwnStyle.
                </p>
            </ul>

            <p>OwnStyle es el lugar donde la moda se encuentra con la individualidad. Únete a nosotros y crea tu propio
                estilo, sin comprometer tu autenticidad.</p>

        </div>
    </section>


    <section class="promociones">
        <div class="titulo-tienda">
            <h1 class="own">Promociones</h1>
        </div>
        <div class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <?php
                include "config/Conexion.php";

                $Sql = "SELECT * FROM productos";
                $resultado = $conexion->query($Sql);
                $contador = 0; // Inicializamos el contador

                while ($Fila = $resultado->fetch_assoc()) {
                    if ($contador >= 4) {
                        break; // Salir del bucle después de mostrar los 4 primeros elementos
                    }
                ?>

                    <div class="item">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($Fila['Foto']); ?>" class="img-item">
                        <span class="titulo-item"><?php echo $Fila['NombreProducto']; ?></span>
                        <span class="precio-item">S/ <?php echo $Fila['Precio']; ?>.00</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>

                <?php
                    $contador++; // Incrementamos el contador
                }
                ?>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

    <section class="testimonios">
        <!-- Testimonios de clientes -->
    </section>

    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

    <footer class="footer">
        <div class="logo">
            <img src="img/logoheader.png" alt="Logo">
        </div>
        <div class="links">
            <ul>
                <li><a href="^1^">Quiénes somos</a></li>
                <li><a href="^2^">Política de privacidad</a></li>
                <li><a href="^3^">Contacto</a></li>
            </ul>
        </div>
        <div class="socials">
            <ul>
                <li><a href="^4^"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="^5^"><i class="fab fa-twitter"></i></a></li>
                <li><a href="^6^"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>

</body>

</html>