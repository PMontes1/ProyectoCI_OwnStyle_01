<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/contacto.css">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    
    <link rel="stylesheet" type="text/css" href="Css/nosotros.css">
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

    
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------------------------- -->

    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Contáctanos:</h1>
                            <p class="lead fw-normal text-muted mb-0">OWNSTYLE!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nombres y Apellidos:</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Complete el campo.</div>
                                    </div>
                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Correo electrónico:</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Complete el campo.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Correo no es válido.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Celular:</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Complete el campo.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Mensaje:</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Complete el campo.</div>
                                    </div>
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Mensaje Enviado!</div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error envio de mensaje! u-u </div></div>
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">ENVIAR</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

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