<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Dental Congreso</title>
    <link rel="icon" href="images/logo1.png">
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-color: #C7EAFF;
    }

    main p {
        font-size: 20px;
    }

    /*header*/
    header {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
    }

    header p {
        color: #004AAD;
        font-size: 20px;
    }

    .icon {
        width: 45px;
        height: auto;
        margin: 0 15px;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .logo {
        width: 190px;
        height: auto;
        margin: 10px;
    }

    .icons-social {
        display: flex;
        border: 2px solid #E76868;
        border-radius: 30px;
        background-color: transparent;
        justify-content: center;
        width: 450px;
        margin: 15px 0;
    }

    /*portada*/
    .portada {
        display: flex;
        align-items: flex-end;
    }

    .portada img {
        width: 100%;
        height: auto;
    }

    .text-portada {
        position: absolute;
        background-color: #C7EAFF;
        opacity: 0.7;
        padding: 40px;
    }

    .text-portada p {
        color: #004AAD;
        font-size: 20px;
    }

    .text-portada h1 {
        color: #004AAD;
        font-size: 40px;
    }

    /*video y info*/
    .video-info {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 2% 9%;
    }

    .info-nuestra {
        padding: 0 80px;
    }

    .dato {
        max-width: 450px;
        margin: 25px 0;
    }

    .linea-celeste {
        margin: 6px;
        width: 50px;
        height: 4px;
        background-color: #E76868;
        border-radius: 10px;
    }

    .info-nuestra p {
        color: #004AAD;
    }

    .info-nuestra h1 {
        color: #004AAD;
    }

    /*titulos globos*/
    .boton-titulo {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #E76868;
        border-radius: 50px;
        background-color: transparent;
        color: #E76868;
        margin-bottom: 30px;
    }

    /*Productos y servicios*/
    .servicios {
        background-color: #004AAD;
        padding: 2% 0;
    }

    .icon-check {
        width: 30px;
        height: auto;
        margin: 10px;
    }

    .productos {
        display: flex;
        justify-content: center;
    }

    .productos-check {
        display: flex;
        align-items: center;
    }

    .servicios p {
        color: #fff;
    }

    .servicios h2 {
        color: #E76868;
    }

    /*contacto*/
    .contactos {
        margin: 2% 9%;
    }

    .datos-contacto {
        display: flex;
        justify-content: center;
    }

    .icon-contacto {
        width: 60px;
        height: auto;
        margin: 6px 10px;
    }

    .info-contacto {
        display: flex;
        align-items: center;
    }

    .info-contacto p {
        color: #004AAD;
    }

    .datos-contacto iframe {
        width: 600px;
        height: 500px;
    }

    .QR {
        width: 170px;
        margin: 30px 10px;
    }

    /* Carruseles */
    .carruseles {
        margin: 2% 9%;
    }

    .iframe-carousel,
    .iframe-carousel-2 {
        position: relative;
        width: 100%;
        max-width: 1200px;
        /* Ancho máximo del carrusel */
        margin: auto;
        overflow: hidden;
        /* Esconde el contenido que se desborda */
    }

    .iframe-wrapper,
    .iframe-wrapper-2 {
        display: flex;
        transition: transform 0.5s ease-in-out;
        /* Transición suave para el desplazamiento */
    }

    .iframe-wrapper iframe,
    .iframe-wrapper-2 iframe {
        min-width: 33.33%;
        /* Un tercio del ancho total para cada iframe */
        border: none;
        /* Sin borde en los iframes */
    }

    /* Estilo para los botones de navegación */
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        /* Centrado verticalmente */
        font-size: 24px;
        background-color: rgba(0, 0, 0, 0.5);
        /* Fondo semi-transparente */
        color: white;
        /* Color de texto blanco */
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 1;
        /* Asegúrate que los botones estén por encima del contenido */
    }

    .prev {
        left: 0;
        /* Posición izquierda */
    }

    .next {
        right: 0;
        /* Posición derecha */
    }

    /* Opcional: estilo para los iframes en el segundo carrusel */
    .iframe-wrapper-2 iframe {
        height: 400px;
        /* Altura ajustada para el segundo carrusel */
    }

    /*footer*/
    footer {
        background-color: #E76868;
        padding: 15px;
    }

    .boton-titulo-footer {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #fff;
        border-radius: 50px;
        background-color: transparent;
        color: #fff;
        margin-top: 30px;
    }

    .marcas {
        width: 60rem;
        margin: 10px 0;
    }

    .marcas2 {
        display: none;
    }

    footer p {
        font-size: 20px;
        color: #fff;
    }

    .icons-social-blancos {
        display: flex;
        border: 2px solid #fff;
        border-radius: 30px;
        background-color: transparent;
        justify-content: center;
        width: 450px;
        margin: 15px 0;
    }

    /*responsives*/

    @media screen and (max-width: 1400px) {

        /*video y info*/
        .video-info {
            flex-direction: column;
        }

        .dato {
            max-width: 500px;
        }
    }

    @media screen and (max-width: 1100px) {

        main p {
            font-size: 18px;
        }

        /*header*/
        .logo {
            width: 180px;
            height: auto;
        }

        .icon {
            margin-right: 15px;
        }

        /*portada*/
        .text-portada p {
            font-size: 18px;
        }

        .text-portada h1 {
            font-size: 30px;
        }

        /*contacto*/
        .datos-contacto {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .infos {
            margin: 20px 0;
        }

        /*footer*/
        footer p {
            font-size: 18px;
        }

        .marcas {
            display: none;
        }

        .marcas2 {
            display: flex;
            width: 40rem;
            margin: 20px 0;
        }

        .QR {
            width: 180px;
            margin: 20px;
        }
    }

    @media screen and (max-width: 800px) {

        main p {
            font-size: 15px;
        }

        /*header*/
        .icon {
            width: 45px;
            height: auto;
            margin-right: 5px;
        }

        /*portada*/
        .text-portada p {
            font-size: 12px;
        }

        .text-portada h1 {
            font-size: 25px;
        }

        .portada {
            display: flex;
            align-items: center;
            flex-direction: column-reverse;
        }

        .portada img {
            width: 100%;
            height: auto;
        }

        .text-portada {
            position: relative;
            background-color: #C7EAFF;
            opacity: 0.8;
            padding: 40px;
        }

        /*titulos globos*/
        .boton-titulo {
            font-size: 20px;
        }

        .boton-titulo-footer {
            margin: 20px 10px;
            font-size: 20px;
        }

        /*Productos y servicios*/
        .productos {
            flex-direction: column;
            display: flex;
            align-items: center;
        }

        /*video y info*/
        video {
            width: 350px;
            height: auto;
        }

        .info-nuestra h1 {
            font-size: 20px;
        }

        /*socials*/
        .redes {
            flex-direction: column;
        }

        /*footer*/
        footer p {
            font-size: 15px;
        }

        .marcas2 {
            width: 30rem;
            margin: 0;
        }
    }
</style>

<body>

    <?php

    $iconosSociales = [
        ["link" => "https://www.facebook.com/LabDentalCongreso", "image" => "images/facebook.png"],
        ["link" => "https://www.instagram.com/labdentalcongreso/?hl=es-la", "image" => "images/instagram.png"],
        ["link" => "mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar...", "image" => "images/correo.png"],
        ["link" => "https://www.tiktok.com/@labdeltal?is_from_webapp=1&sender_device=pc", "image" => "images/tiktok.png"],
        ["link" => "tel:11-5601-8912", "image" => "images/telefono.png"],
        ["link" => "https://maps.app.goo.gl/qNqJL3g7YrWN5gr28", "image" => "images/ubicacion.png"],
    ];

    $iconosSocialesBlancos = [
        ["link" => "https://www.facebook.com/LabDentalCongreso", "image" => "images/facebook-blanco.png"],
        ["link" => "https://www.instagram.com/labdentalcongreso/?hl=es-la", "image" => "images/instagram-blanco.png"],
        ["link" => "mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar...", "image" => "images/correo-blanco.png"],
        ["link" => "https://www.tiktok.com/@labdeltal?is_from_webapp=1&sender_device=pc", "image" => "images/tiktok-blanco.png"],
        ["link" => "tel:11-5601-8912", "image" => "images/telefono-blanco.png"],
        ["link" => "https://maps.app.goo.gl/qNqJL3g7YrWN5gr28", "image" => "images/ubicacion-blanco.png"],
    ];

    $productosServicios = [
        "Prótesis flexibles",
        "Prótesis de acrilico",
        "Prótesis con cromo cobalto",
        "Prótesis arañitas",
        "Prótesis completas",
        "Prótesis parciales",
        "Reparación de prótesis",
        "Ajustes y modificaciones",
        "Rebasado de prótesis",
        "Retenedores dentales",
        "Protectores bucales",
        "Protectores contra bruxismo",
        "Coronas de acrilico"
    ];

    // Función para mostrar iconos sociales
    function mostrarIconosSociales($icons)
    {
        foreach ($icons as $icon) {
            echo '<a href="' . $icon['link'] . '" target="_blank"><img src="' . $icon['image'] . '" alt="" class="icon"></a>';
        }
    }

    // Función para mostrar iconos sociales
    function mostrariconosSocialesBlancos($icons)
    {
        foreach ($icons as $icon) {
            echo '<a href="' . $icon['link'] . '" target="_blank"><img src="' . $icon['image'] . '" alt="" class="icon"></a>';
        }
    }

    // Función para mostrar productos y servicios
    function mostrarProductosServicios($productosServicios)
    {
        foreach ($productosServicios as $productoServicio) {
            echo '<div class="productos-check"><img src="images/check.png" alt="" class="icon-check"><p>' . $productoServicio . '</p></div>';
        }
    }

    ?>

    <header>
        <section class="icons-social">
            <?php mostrarIconosSociales($iconosSociales); ?>
        </section>
        <img src="images/logo1.png" alt="" class="logo">
    </header>

    <div class="portada">
        <div class="text-portada">
            <h1>¡Bienvenidos a LabDental Congreso!</h1>
            <p> Somos especialistas en la fabricación y reparación de prótesis removibles. <br> Con nosotros, encontrarás soluciones dentales confiables y de calidad.</p>
        </div>
        <img src="images/portada.png" alt="">
    </div>

    <main>
        <div class="video-info">
            <video width="700" height="700" autoplay muted loop controls>
                <source src="" type="video/mp4">
                <source src="LabDental.mp4" type="video/mp4">
                Tu navegador no es compatible con videos HTML
            </video>
            <div class="info-nuestra">
                <?php
                $titulos = ["Personal", "Servicio", "Trayectoria"];
                foreach ($titulos as $titulo): ?>
                    <center>
                        <div class="dato">
                            <h1><?php echo $titulo; ?></h1>
                            <div class="linea-celeste"></div>
                            <p>
                                <?php
                                echo match ($titulo) {
                                    "Personal" => "Altamente capacitado cumple con los más altos estándares de calidad en los trabajos.",
                                    "Servicio" => "Nuestra metodología de trabajo garantiza entregas puntuales, contribuyendo a reducir costos.",
                                    "Trayectoria" => "Con 15 años de experiencia, hemos dedicado nuestro compromiso al servicio de odontólogos."
                                };
                                ?>
                            </p>
                        </div>
                    </center>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="servicios">
            <center>
                <h2 class="boton-titulo">Productos y servicios</h2>
            </center>
            <div class="productos">
                <div><?php mostrarProductosServicios(array_slice($productosServicios, 0, ceil(count($productosServicios) / 2))); ?></div>
                <div><?php mostrarProductosServicios(array_slice($productosServicios, ceil(count($productosServicios) / 2))); ?></div>
            </div>
        </div>

        <div class="contactos">
            <center>
                <h2 class="boton-titulo">Contáctese con nosotros</h2>
            </center>
            <div class="datos-contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7195252249057!2d-58.3892188!3d-34.61125319999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccda694bff709%3A0xd9c8fb2ea844c65c!2sLaboratorio%20Dental%20Congreso!5e0!3m2!1ses!2sar!4v1709940723165!5m2!1ses!2sar"
                    style="margin: 0 15px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="infos">
                    <?php
                    $contactos = [
                        ["icon" => "ubicacion.png", "texto" => "Adolfo Alsina 1609, Piso 7 Oficina 7 <br> Monserrat - Capital Federal"],
                        ["icon" => "horario.png", "texto" => "Lun-Vie: 9:00 a 20:00 <br> Sab: 9:00 a 14:00"],
                        ["icon" => "telefono.png", "texto" => "11 5601 8912"],
                        ["icon" => "whatsapp.png", "texto" => "11 5601 8912"],
                        ["icon" => "facebook.png", "texto" => "labdentalcongreso"],
                        ["icon" => "instagram.png", "texto" => "labdentalcongreso"],
                        ["icon" => "correo.png", "texto" => "labdentalcongreso@gmail.com"]
                    ];

                    foreach ($contactos as $contacto): ?>
                        <div class="info-contacto">
                            <img src="images/<?php echo $contacto['icon']; ?>" alt="" class="icon-contacto">
                            <p><?php echo $contacto['texto']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="social-QR">
                <center>
                    <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank"><img src="images/insta-qr.png" alt="" class="QR"></a>
                    <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank"><img src="images/wapp-qr.png" alt="" class="QR"></a>
                    <a href="https://www.facebook.com/LabDentalCongreso" target="_blank"><img src="images/face-qr.png" alt="" class="QR"></a>
                </center>
            </div>
        </div>

        <div class="carruseles">
            <center>
                <h2 class="boton-titulo">Nuestros productos</h2>
            </center>
            <div class="iframe-carousel">
                <button class="carousel-btn prev" onclick="showPrevious()">&#10094;</button>
                <div class="iframe-wrapper">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid02wToBGMFr72YPERqSVyNdGBbP2vCL88x52fhskRYTrNvJJNmij2gYqzagkNTDDcBhl&width=400&show_text=false&height=795&appId" width="400" height="795"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid02SyEGfacC1un8Xx66FfZkheifeenEYUyktvpChyUc6eWNUbUdVa7PvzRigfNefQiql&width=400&show_text=false&height=741&appId" width="400" height="741"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid034EJF4jmrfcwEjpJJvPaKe6YoxfsnQiZxcaiFy73m56g5dWkJRm3wr2uw3CTTTG6wl&width=400&show_text=false&height=728&appId" width="400" height="728"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid0pDLbW4nbUSYR359Xus2eSY9SZTd59AHMw2gvg3RQBqqvEk9QuijqsJXdprcBf2g7l&width=400&show_text=false&height=703&appId" width="400" height="703"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid02ngSXs7AzBt8PTfwLwK1CM2VijpRSpX9bXf55YGSoHFtwJ3mtvqST3KsGbVqpzgYul&width=400&show_text=false&height=788&appId" width="400" height="788"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid0YAKgXZJzxqaVAWrTfhWh7nkUxUJYdMMAf8ZXFZdv2pPdf7v3L17Taz821eGzUkiil&width=400&show_text=false&height=691&appId" width="400" height="691"></iframe>
                </div>
                <button class="carousel-btn next" onclick="showNext()">&#10095;</button>
            </div>

            <center>
                <h2 class="boton-titulo">Nuestras promociones</h2>
            </center>
            <div class="iframe-carousel-2">
                <button class="carousel-btn prev" onclick="showPrevious5()">&#10094;</button>
                <div class="iframe-wrapper-2">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid029MndJ2a6yaQHuCWub5xVSqaz4XaqNwWxhxUcSkSQ2RhuyePCcnh4pbxrKKL8gWdvl&width=400&show_text=false&height=500&appId" width="400" height="500"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid02Y4KDZxG8dc5eimQdVSNQ7xmgsj5Tk3DkYJ3ZH5mJNkb9fWFCZxmkqh79Qa2SMETgl&width=400&show_text=false&height=500&appId" width="400" height="500"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid0PTLQSRR8BY3xypfyhjk2nLcpYqwiSWKKZ4ChCyYUFGr8wsZKYMr1rSQGe5NU7P4Xl&width=400&show_text=false&height=500&appId" width="400" height="500"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid029unX2B4y9Y6fAgS3895rcogoP2fDQyWpKTT6bFWt55XaP8eSZejJJgY9MMsHqsTkl&width=400&show_text=false&height=500&appId" width="400" height="500"></iframe>
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso%2Fposts%2Fpfbid02A5BHNqcgq1jFKFYeqG7CwTRGXVeuw7prihVXqhfp873X4NkSUKKkrRCmcWf9YUmtl&width=400&show_text=false&height=500&appId" width="400" height="500"></iframe>
                </div>
                <button class="carousel-btn next" onclick="showNext5()">&#10095;</button>
            </div>

            <script>
                // primer carrusel
                let currentIndex = 0;
                const iframes = document.querySelectorAll('.iframe-wrapper iframe');

                function showIframe(index) {
                    const offset = index * -100 / 3; // Desplazamiento en tercios
                    document.querySelector('.iframe-wrapper').style.transform = `translateX(${offset}%)`;
                }

                function showNext() {
                    currentIndex = (currentIndex + 3) % iframes.length; // Ciclo de índices
                    showIframe(currentIndex);
                    
                }

                function showPrevious() {
                    currentIndex = (currentIndex - 3 + iframes.length) % iframes.length; // Ciclo de índices
                    showIframe(currentIndex);
                }

                // Inicializa el primer conjunto de iframes visible
                showIframe(currentIndex);

                // segundo carrusel
                let currentIndex5 = 0;
                const iframes5 = document.querySelectorAll('.iframe-wrapper-2 iframe');

                function showIframe5(index) {
                    const offset = index * -100 / 3; // Desplazamiento en tercios
                    document.querySelector('.iframe-wrapper-2').style.transform = `translateX(${offset}%)`;
                }

                function showNext5() {
                    currentIndex5 = (currentIndex5 + 3) % iframes5.length; // Ciclo de índices
                    showIframe5(currentIndex5);
                }

                function showPrevious5() {
                    currentIndex5 = (currentIndex5 - 3 + iframes5.length) % iframes5.length; // Ciclo de índices
                    showIframe5(currentIndex5);
                }

                // Inicializa el segundo conjunto de iframes visible
                showIframe5(currentIndex5);
            </script>
        </div>

    </main>

    <footer>
        <center>
            <h2 class="boton-titulo-footer">Trabajamos con las mejores marcas y proveedores</h2>

            <div>
                <img src="images/marcas.png" class="marcas" alt="">
                <img src="images/marcas2.png" class="marcas2" alt="">
            </div>
            <section class="icons-social-blancos">
                <?php mostrariconosSocialesBlancos($iconosSocialesBlancos); ?>
            </section>
        </center>

        <p>Laboratorio Dental Congreso © Copyright 2024. <br> Todos los derechos reservados.</p>

        <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank" class="whatsapp">
            <img src="images/icon-whats.png" class="images" style="width: 80px; height: auto; margin: 10px; position: fixed; bottom: 10px; right: 10px;">
        </a>
    </footer>
</body>

</html>