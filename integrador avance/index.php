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

    <!-- Slider -->
    <div class="slider-container">
        <div class="slider position">
            <div class="slider-overlay"></div>
            <div class="slider-content">
                <h1>Bienvenido a OwnStyle</h1>
                <p>Su ropa perfecta</p>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>
    </div>

    <section>
    <!-- INTRO-CATALOGO -->
    <div class="intro">
        <h1>Catálogo Deportivo</h1>
        <p>Explora nuestra selección de productos deportivos, incluyendo prendas y equipamiento para tus actividades deportivas.</p>
    </div>

    <!-- CATALOGO -->
    
    <div class="catalog-container">
        <!-- Maleta de Ejercicio -->
        <div class="catalog-card">
            <img src="img.tienda\maletapequeña4.png" alt="Maleta de Ejercicio" />
            <div class="card-content">
                <h2>Maleta de Ejercicio</h2>
                <p>Una maleta de ejercicio espaciosa para llevar tu equipo deportivo y accesorios a tus entrenamientos y viajes.</p>
            </div>
        </div>

        <!-- Prendas Deportivas -->
        <div class="catalog-card">
            <img src="img.tienda\polohombreblanco2.png" alt="Camiseta Deportiva" />
            <div class="card-content">
                <h2>Camiseta Deportiva</h2>
                <p>Una camiseta deportiva cómoda y transpirable para tus entrenamientos.</p>
            </div>
        </div>

       <!-- Short -->
       <div class="catalog-card">
            <img src="img.tienda\lycracorta4.png" alt="Short Deportivo" />
            <div class="card-content">
                <h2>Short Deportivo</h2>
                <p>Un short lycra deportivo ligero y transpirable para un rendimiento óptimo en tus entrenamientos.</p>
            </div>
        </div>
    </div>
</section>

    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

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
                        <span class="titulo-item">
                            <?php echo $Fila['NombreProducto']; ?>
                        </span>
                        <span class="precio-item">S/
                            <?php echo $Fila['Precio']; ?>.00
                        </span>
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