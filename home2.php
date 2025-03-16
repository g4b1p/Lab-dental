<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Dental Congreso</title>

    <link rel="icon" href="images/logo-a-color.png">
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    body {
        margin: 0;
        font-size: 18px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        background-color: #c7eaff;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            /* Empieza desde fuera de la pantalla, a la izquierda */
            opacity: 0;
        }

        to {
            transform: translateX(0);
            /* Llega a su posición original */
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            /* Empieza desde fuera de la pantalla, a la izquierda */
            opacity: 0;
        }

        to {
            transform: translateX(0);
            /* Llega a su posición original */
            opacity: 1;
        }
    }

    header {
        height: auto;
        width: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 5%;
        animation: fadeIn 2s ease-in-out;
    }

    .menu {
        background-color: #004aad;
        border-radius: 20px;
        display: flex;
    }

    .menu a {
        text-decoration: none;
        color: #fff;
    }

    .menu-item {
        padding: 3px 15px;
        margin: 8px;
        position: relative;
        cursor: pointer;
        z-index: 2;
    }

    .menu-item::after {
        content: '';
        position: absolute;
        background-color: #fff;
        height: 100%;
        width: 100%;
        border-radius: 20px;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        opacity: 0;
        transition: top 0.5s, opacity 0.5s;
    }

    .menu-item:hover::after {
        top: 50%;
        opacity: 1;
    }

    .menu-item a:hover {
        color: #000;
    }

    .logo-cabecera {
        height: 150px;
        width: auto;
        margin: 20px 0;
    }

    .social-icon {
        height: 45px;
        width: auto;
        margin: 0 5px;
    }

    .portada {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        padding: 0 5%;
        margin-bottom: 5%;
        animation: slideInRight 1.9s ease-out;
    }

    .imagen-portada {
        width: 100%;
        height: auto;
        opacity: 0.8;
    }

    .text-portada {
        position: absolute;
        padding: 20px 60px;
        color: #004aad;
        background-color: #c7eaff;
        opacity: 0.7;
        text-align: center;
    }

    .boton-titulo {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #E76868;
        border-radius: 50px;
        background-color: transparent;
        color: #E76868;
        margin: 50px 0;
    }

    .sobre-nosotros {
        padding: 0 5%;
        margin-bottom: 5%;
        animation: slideInLeft 1.9s ease-out;
    }

    .datos {
        display: flex;
        /*flex-wrap: wrap;*/
        justify-content: space-between;
    }

    .dato {
        display: inline-block;
        text-align: center;
        width: 400px;
        color: #004aad;
    }

    .dato img {
        width: 150px;
        height: auto;
    }

    .linea-celeste {
        background-color: #E76868;
        height: 5px;
        width: 50px;
        border-radius: 50px;
        margin: auto;
    }

    .nuestros-servicios {
        padding: 0 5%;
        margin-bottom: 5%;
    }

    .productos {
        display: flex;
        flex-wrap: wrap;
        /* los productos pasan a la siguiente línea si no caben en el ancho de la pantalla */
        justify-content: center;
        gap: 20px;
        /* agrega un espacio de 20px entre cada producto */
    }

    .producto {
        position: relative;
        /* permite posicionar elementos hijos de forma absoluta dentro de este contenedor */
        width: 30%;
        height: auto;
    }

    .producto-imagen {
        width: 100%;
        display: block;
        border-radius: 10px;
    }

    .turno-btn {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #a6a6a6;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        cursor: pointer;
        border-radius: 0 0 10px 10px;
        opacity: 0;
        font-weight: bold;
        transition: opacity 0.3s ease-in-out;
    }

    .saber-mas {
        display: none;
    }

    .checkbox {
        display: none;
    }

    .overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        color: #fff;
        padding: 10px;
        font-size: 14px;
        text-align: center;
        width: 80%;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .producto:hover .turno-btn {
        opacity: 1;
    }

    .producto:hover .overlay {
        opacity: 1;
    }

    .producto:hover .producto-imagen {
        opacity: 0.7;
    }

    .contactanos {
        padding: 0 5%;
        margin-bottom: 5%;
    }

    .info-contacto {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        justify-content: center;
        margin: auto;
        align-items: center;
    }

    .datos-contacto {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        text-align: center;
    }

    .full-dato-contacto {
        grid-column: span 2;
        background-color: #E76868;
        color: #c7eaff;
        padding: 30px 0;
    }

    .dato-contacto {
        background-color: #E76868;
        color: #c7eaff;
        padding: 30px 0;
    }

    .dato-contacto h4,
    p {
        margin: 5px 0;
    }

    .full-dato-contacto h4,
    p {
        margin: 5px 0;
    }

    .icon-contacto {
        width: 50px;
        height: auto;
    }

    .galeria-casos {
        padding: 0 5%;
        margin-bottom: 5%;
    }

    .carrusel {
        position: relative;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
    }

    .carrusel-contenedor {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .item {
        width: calc(100% / 3);
        flex-shrink: 0;
    }

    .carrusel input {
        display: none;
    }

    /* Estado 1 (slide1): se ve image1, image2, image3 */
    #slide1:checked~.carrusel-contenedor {
        transform: translateX(0);
    }

    /* Estado 2 (slide2): se desplaza un 33.333% a la izquierda
   mostrando image2, image3, image4 */
    #slide2:checked~.carrusel-contenedor {
        transform: translateX(-33.333%);
    }

    /* Flechas: posicionadas fuera del carrusel */
    .flecha {
        /*position: absolute;
        top: 50%;*/
        transform: translateY(-50%);
        cursor: pointer;
        display: none;
        /**/
    }

    .flecha img {
        width: 50px;
    }

    /* Flechas a la izquierda y derecha, fuera del contenedor */
    .flecha-izq {
        position: absolute;
        right: 95%;
        top: 50%;
    }

    .flecha-der {
        position: absolute;
        left: 95%;
        top: 50%;
    }

    /* Muestra las flechas para slide1 */
    #slide1:checked~.flecha1 {
        display: block;
    }

    /* Muestra las flechas para slide2 */
    #slide2:checked~.flecha2 {
        display: block;
    }

    footer {
        background-color: #E76868;
        text-align: center;
        color: #fff;
        padding: 0 5%;
    }

    .boton-titulo-footer {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #fff;
        border-radius: 50px;
        background-color: transparent;
        color: #fff;
        margin: 50px 0;
    }

    .marcas-img {
        width: 90%;
        margin-bottom: 30px;
    }

    .social-section {
        border: 2px solid #fff;
        border-radius: 50px;
        display: inline-block;
        padding: 15px;
        margin-bottom: 30px;
    }

    footer p {
        margin: 30px 0;
    }

    .gabi-coder-img {
        width: 150px;
        height: auto;
        margin-bottom: 30px;
    }

    html {
        scroll-behavior: smooth;
    }

    /* Checkbox oculto */
    .chat-toggle {
        display: none;
    }

    /* Estilos del botón flotante */
    .chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #f27c7c;
        border: 3px solid #fff;
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        display: flex;
        align-items: center;
        animation: slideInRight 1.5s ease-out;
    }

    .chat-button img {
        width: 30px;
        height: auto;
        margin-right: 10px;
    }

    .chat-button:hover {
        background: #e06464;
    }

    /* Contenedor del chat */
    .chat-container {
        width: 360px;
        position: fixed;
        bottom: 80px;
        right: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        display: none;
        flex-direction: column;
    }

    /* Mostrar chat cuando el checkbox está activo */
    .chat-toggle:checked~.chat-container {
        display: flex;
    }

    /* Encabezado del chat */
    .chat-header {
        background: #f27c7c;
        color: white;
        padding: 15px;
        display: flex;
        align-items: center;
        /* Alinear verticalmente */
        gap: 8px;
        /* Espacio entre la imagen y el nombre */
        border-radius: 15px 15px 0 0;
        position: relative;
        /* Necesario para mover la "X" */
    }

    .chat-header h3 {
        margin: 0;
        margin-top: 10px;
    }

    .chat-logo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .status {
        font-size: 12px;
    }

    /* Botón de cerrar el chat */
    .close-chat {
        position: absolute;
        top: 5px;
        /* Mover más arriba */
        right: 10px;
        /* Ajustar la posición a la derecha */
        background: none;
        border: none;
        color: white;
        font-size: 22px;
        cursor: pointer;
    }


    /* Ocultar chat cuando se cierra */
    .chat-toggle:not(:checked)~.chat-container {
        display: none;
    }

    /* Cuerpo del chat */
    .chat-body {
        background: #cbe7ff;
        padding: 25px 15px;
    }

    .chat-message {
        background: white;
        padding: 10px;
        border-radius: 10px;
        font-size: 14px;
    }

    /* Pie del chat */
    .chat-footer {
        display: flex;
        align-items: center;
        padding: 10px;
        background: #f1f1f1;
        border-radius: 0 0 15px 15px;
    }

    .chat-footer input {
        flex: 1;
        border: none;
        padding: 10px;
        border-radius: 5px;
        color: gray;
        background: #e0e0e0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .send-btn {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        margin-left: 10px;
    }

    @media screen and (max-width: 1400px) {
        .turno-btn {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60%;
            background: #a6a6a6;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            cursor: pointer;
            border-radius: 0 0 0 10px;
            font-weight: bold;
            border-right: 2px solid #fff;
            opacity: 1;
            font-size: 17px;
        }

        .saber-mas {
            display: flex;
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40%;
            background: #a6a6a6;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 0 0 10px 0;
            font-weight: bold;
            font-size: 17px;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            color: #fff;
            padding: 10px;
            font-size: 14px;
            text-align: center;
            width: 80%;
            display: none;
            transition: opacity 0.4s ease;
        }

        .checkbox {
            display: none;
        }

        /* Mostrar el texto cuando el checkbox esté marcado */
        .checkbox:checked+.saber-mas+.overlay {
            display: block;
            opacity: 1;
        }
    }

    @media screen and (max-width: 1100px) {

        body {
            font-size: 17px;
        }

        header {
            flex-direction: column;
            align-items: center;
            height: auto;
        }

        .menu {
            order: 1;
            margin: 15px 0;
        }

        .social-media {
            order: 2;
            margin: 15px 0;
        }

        .logo-cabecera {
            margin: 10px 0;
            height: 160px;
            width: auto;
        }

        .portada {
            display: inline-block;
            height: 300px;
        }

        .text-portada {
            justify-content: center;
            position: static;
            opacity: 1;
        }

        .datos {
            flex-direction: column;
            display: flex;
            align-items: center;
        }

        .dato {
            margin: 20px;
        }

        .producto {
            width: 40%;
        }
    }

    @media screen and (max-width: 900px) {
        
    }

    @media screen and (max-width: 600px) {
        body {
            font-size: 17px;
        }

        .productos {
            flex-direction: column;
        }

        .producto {
            width: 100%;
        }

        .info-contacto {
            display: flex;
            flex-direction: column;
        }

        .datos-contacto {
            width: 100%;
        }

        .galeria-casos video {
            width: 100%;
        }

    }
</style>

<body>
    <header>
        <nav class="menu">
            <div class="menu-item"><a href="home2.php">Inicio</a></div>
            <div class="menu-item"><a href="#nuestros-servicios">Nuestros servicios</a></div>
            <div class="menu-item"><a href="#contactanos">Contáctanos</a></div>
        </nav>

        <a href="home2.php"><img src="images/logo-a-color.png" class="logo-cabecera" alt=""></a>

        <nav class="social-media">
            <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank"><img src="images/whatsapp-azul.png" class="social-icon" alt=""></a>
            <a href="https://www.facebook.com/LabDentalCongreso" target="_blank"><img src="images/facebook-azul.png" class="social-icon" alt=""></a>
            <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank"><img src="images/instagram-azul.png" class="social-icon" alt=""></a>
            <a href="mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar..." target="_blank"><img src="images/correo-azul.png" class="social-icon" alt=""></a>
            <a href="tel:11-5601-8912" target="_blank"><img src="images/telefono-azul.png" class="social-icon" alt=""></a>
            <a href="https://maps.app.goo.gl/qNqJL3g7YrWN5gr28" target="_blank"><img src="images/ubicacion-azul.png" class="social-icon" alt=""></a>
        </nav>
    </header>

    <div class="portada">
        <img src="images/portada.png" class="imagen-portada" alt="">
        <div class="text-portada">
            <h1>¡Bienvenidos a LabDental Congreso!</h1>
            <p> Somos especialistas en la fabricación y reparación de prótesis removibles. <br> Con nosotros, encontrarás soluciones dentales confiables y de calidad.</p>
        </div>
    </div>

    <div class="sobre-nosotros">
        <center>
            <h2 class="boton-titulo">Sobre nosotros</h2>
        </center>
        <div class="datos">
            <div class="dato">
                <img src="images/icon1.png" alt="">
                <h2>Trayectoria</h2>
                <div class="linea-celeste"></div>
                <p>Con 15 años de experiencia, hemos dedicado nuestro compromiso y profesionalidad al servicio de odontólogos, clínicas y laboratorios dentales.</p>
            </div>
            <div class="dato">
                <img src="images/icon2.png" alt="">
                <h2>Servicio</h2>
                <div class="linea-celeste"></div>
                <p>Nuestra metodología de trabajo garantiza entregas puntuales, lo que contribuye a reducir los costos del trabajo final.</p>
            </div>
            <div class="dato">
                <img src="images/icon3.png" alt="">
                <h2>Personal</h2>
                <div class="linea-celeste"></div>
                <p>Altamente capacitado cumple con los más altos estándares de calidad en los trabajos, lo que se traduce en la obtención de los mejores resultados.</p>
            </div>
        </div>
    </div>

    <div class="nuestros-servicios" id="nuestros-servicios">
        <center>
            <h2 class="boton-titulo">Nuestros servicios</h2>
        </center>
        <div class="productos">

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle1" class="checkbox">
                <label for="toggle1" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle2" class="checkbox">
                <label for="toggle2" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle3" class="checkbox">
                <label for="toggle3" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle4" class="checkbox">
                <label for="toggle4" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle5" class="checkbox">
                <label for="toggle5" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle6" class="checkbox">
                <label for="toggle6" class="saber-mas">
                    SABER MÁS
                </label>
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20solicitar%20un%20turno%20para%20la%20protesis%20flexible.">
                    <div class="turno-btn">SOLICITAR TURNO</div>
                </a>
            </div>

        </div>

    </div>

    <div class="contactanos" id="contactanos">
        <center>
            <h2 class="boton-titulo">Contáctanos</h2>
        </center>
        <div class="info-contacto">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1641.8584873610855!2d-58.390237967233354!3d-34.61132111254023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccda694bff709%3A0xd9c8fb2ea844c65c!2sLaboratorio%20Dental%20Congreso!5e0!3m2!1ses!2sar!4v1742055200765!5m2!1ses!2sar" width="100%" height="778" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="datos-contacto">
                <div class="dato-contacto">
                    <img src="images/telefono-celeste.png" class="icon-contacto" alt="">
                    <h4>Teléfono</h4>
                    <p>11 5601 8912</p>
                </div>
                <div class="dato-contacto">
                    <img src="images/whatsapp-celeste.png" class="icon-contacto" alt="">
                    <h4>Whatsapp</h4>
                    <p>11 5601 8912</p>
                </div>
                <div class="dato-contacto">
                    <img src="images/facebook-celeste.png" class="icon-contacto" alt="">
                    <h4>Facebook</h4>
                    <p>labdentalcongreso</p>
                </div>
                <div class="dato-contacto">
                    <img src="images/instagram-celeste.png" class="icon-contacto" alt="">
                    <h4>Instagram</h4>
                    <p>labdentalcongreso</p>
                </div>
                <div class="full-dato-contacto">
                    <img src="images/horario-celeste.png" class="icon-contacto" alt="">
                    <h4>Horario</h4>
                    <p>Lun-Vie: 9:00 a 20:00 | Sáb: 9:00 a 14:00</p>
                </div>
                <div class="full-dato-contacto">
                    <img src="images/correo-celeste.png" class="icon-contacto" alt="">
                    <h4>Email</h4>
                    <p>labdentalcongreso@gmail.com</p>
                </div>
            </div>

        </div>
    </div>

    <div class="galeria-casos">
        <center>
            <h2 class="boton-titulo">Galeria de casos</h2>
        </center>
        <center>
            <video width="60%" height="60%" autoplay muted loop controls>
                <source src="" type="video/mp4">
                <source src="images/LabDental.mp4" type="video/mp4">
                Tu navegador no es compatible con videos HTML
            </video>
        </center>

        <div class="carrusel">
            <!-- Radio buttons para controlar los estados -->
            <input type="radio" name="slides" id="slide1" checked>
            <input type="radio" name="slides" id="slide2">

            <div class="carrusel-contenedor">
                <img src="images/image1.png" class="item" alt="">
                <img src="images/image2.png" class="item" alt="">
                <img src="images/image3.png" class="item" alt="">
                <img src="images/image4.png" class="item" alt="">
            </div>

            <!-- Flechas para el primer estado (slide1) -->
            <label for="slide2" class="flecha flecha-izq flecha1">
                <img src="images/izquierda.png" alt="Ir a la segunda vista">
            </label>
            <label for="slide2" class="flecha flecha-der flecha1">
                <img src="images/derecha.png" alt="Ir a la segunda vista">
            </label>

            <!-- Flechas para el segundo estado (slide2) -->
            <label for="slide1" class="flecha flecha-izq flecha2">
                <img src="images/izquierda.png" alt="Regresar a la primera vista">
            </label>
            <label for="slide1" class="flecha flecha-der flecha2">
                <img src="images/derecha.png" alt="Regresar a la primera vista">
            </label>
        </div>

    </div>

    <footer>
        <center>
            <h2 class="boton-titulo-footer">Trabajamos con las mejores marcas y proveedores</h2>
        </center>
        <img src="images/marcas-compu.png" class="marcas-img" alt="">

        <center>
            <div class="social-section">
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta."><img src="images/whatsapp-blanco.png" class="social-icon" alt=""></a>
                <a href="https://www.facebook.com/LabDentalCongreso"><img src="images/facebook-blanco.png" class="social-icon" alt=""></a>
                <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la"><img src="images/instagram-blanco.png" class="social-icon" alt=""></a>
                <a href="mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar..."><img src="images/correo-blanco.png" class="social-icon" alt=""></a>
                <a href="tel:11-5601-8912"><img src="images/telefono-blanco.png" class="social-icon" alt=""></a>
                <a href="https://maps.app.goo.gl/qNqJL3g7YrWN5gr28"><img src="images/ubicacion-blanco.png" class="social-icon" alt=""></a>
            </div>
        </center>


        <p>Laboratorio Dental Congreso © Copyright 2025. Todos los derechos reservados.</p>

        <div class="gabi-coder">
            <p>Created by</p>
            <img src="images/logo-gabi.png" class="gabi-coder-img" alt="">
        </div>

    </footer>

    <div class="chat-whatsapp">
        <!-- Botón para abrir el chat -->
        <input type="checkbox" id="chat-toggle" class="chat-toggle">
        <label for="chat-toggle" class="chat-button">
            <img src="images/whatsapp-blanco.png" alt="">
            Haz click aquí para comunicarte
        </label>

        <!-- Contenedor del chat -->
        <div class="chat-container">
            <div class="chat-header">
                <img src="images/logo-a-color.png" alt="Lab Dental Congreso" class="chat-logo">
                <div>
                    <h3>Lab Dental Congreso</h3>
                    <span class="status">Online</span>
                </div>
                <label for="chat-toggle" class="close-chat">&times;</label>
            </div>
            <div class="chat-body">
                <div class="chat-message">
                    <span class="emoji">📋</span> Hola <span class="emoji">👋</span>, bienvenido a
                    <b><i>Lab Dental Congreso</i></b>.
                    <p>¿En qué podemos ayudarte?</p>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" id="user-message" placeholder="Hola! Vengo de la página web...">
                <button class="send-btn" onclick="sendMessage()">➤</button>
            </div>
            <script>
                function sendMessage() {
                    // Obtener el valor del campo de texto
                    var message = document.getElementById("user-message").value;

                    // Codificar el mensaje para que sea seguro en la URL
                    var encodedMessage = encodeURIComponent(message);

                    // Construir el enlace de WhatsApp con el mensaje del usuario
                    var whatsappUrl = "https://api.whatsapp.com/send?phone=%2B541156018912&text=" + encodedMessage;

                    // Abrir el enlace en una nueva ventana
                    window.open(whatsappUrl, "_blank");

                    // Limpiar el campo de texto después de enviar el mensaje
                    document.getElementById("user-message").value = "";
                }
            </script>

        </div>
    </div>
</body>

</html>