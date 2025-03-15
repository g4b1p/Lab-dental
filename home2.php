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
        padding: 0;
        font-size: 18px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        padding: 0 5%;
        background-color: #c7eaff;
    }

    header {
        height: 160px;
        width: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .menu {
        background-color: #004aad;
        border-radius: 20px;
        display: flex;

    }

    .menu-item {
        padding: 3px 15px;
        margin: 8px;
        color: #fff;
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

    .menu-item:hover {
        color: #000;
    }

    .logo-cabecera {
        height: 150px;
        width: auto;
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

    .datos {
        display: flex;
        flex-wrap: wrap;
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
        width: 400px;
        height: auto;
    }

    .producto-imagen {
        width: 100%;
        display: block;
        border-radius: 10px;
    }

    .ver-mas {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #a6a6a6;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
    }

    .producto:hover .ver-mas {
        opacity: 1;
    }

    .producto::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        background: rgba(0, 0, 0, 0);
        transition: background 0.4s ease-in-out;
    }

    .producto:hover::after {
        background: rgba(0, 0, 0, 0.2);
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

    input {
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
    }

    .social-section {
        border: 2px solid #fff;
        border-radius: 50px;
        display: inline-block;
        padding: 15px;
    }


</style>

<body>
    <header>
        <nav class="menu">
            <div class="menu-item">Inicio</div>
            <div class="menu-item">Nuestros servicios</div>
            <div class="menu-item">Contáctanos</div>
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

    <div class="nuestros-servicios">
        <center>
            <h2 class="boton-titulo">Nuestros servicios</h2>
        </center>
        <div class="productos">
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="ver-mas"><b>VER MÁS</b></div>
            </div>

        </div>

    </div>

    <div class="contactanos">
        <center>
            <h2 class="boton-titulo">Contáctanos</h2>
        </center>
        <div class="info-contacto">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1641.8584873610855!2d-58.390237967233354!3d-34.61132111254023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccda694bff709%3A0xd9c8fb2ea844c65c!2sLaboratorio%20Dental%20Congreso!5e0!3m2!1ses!2sar!4v1742055200765!5m2!1ses!2sar" width="700" height="778" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
            <video width="900" height="900" autoplay muted loop controls>
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
        <div class="social-section">
            <img src="images/whatsapp-blanco.png" class="social-icon" alt="">
            <img src="images/facebook-blanco.png" class="social-icon" alt="">
            <img src="images/instagram-blanco.png" class="social-icon" alt="">
            <img src="images/correo-blanco.png" class="social-icon" alt="">
            <img src="images/telefono-blanco.png" class="social-icon" alt="">
            <img src="images/ubicacion-blanco.png" class="social-icon" alt="">
        </div>

        <p>Laboratorio Dental Congreso © Copyright 2025. Todos los derechos reservados.</p>

        <div class="gabi-coder">
            <p>Created by</p>
            
        </div>

    </footer>
</body>

</html>