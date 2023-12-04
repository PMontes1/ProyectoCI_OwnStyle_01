<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css/tienda.css">
    <link rel="stylesheet" href="Css/style.css">
    <script src="JS/index.js" defer></script>
    <script src="JS/app.js" async></script>
    <title>Own Style </title>
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
                    <p>+51 998776112</p>
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
    <div class="titulo-tienda">
        <h1 class="own">Own Shop</h1>
    </div>


    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php
            include "config/Conexion.php";

            $Sql = "SELECT * FROM productos";
            $resultado = $conexion->query($Sql);

            while ($Fila = $resultado->fetch_assoc()) { ?>

                <div class="item">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($Fila['Foto']); ?>" class="img-item">
                    <span class="titulo-item"><?php echo $Fila['NombreProducto']; ?></span>
                    <span class="precio-item">S/ <?php echo $Fila['Precio']; ?>.00</span>
                    <button class="boton-item">Agregar al Carrito</button>
                </div>

            <?php } ?>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
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