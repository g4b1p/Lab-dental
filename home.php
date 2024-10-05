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
        padding: 5px 15px;
    }

    header p {
        color: #004AAD;
        font-size: 20px;
    }

    .icon {
        width: 50px;
        height: auto;
        margin-right: 20px;
    }

    .logo {
        width: 170px;
        height: auto;
    }

    .icons-social {
        display: flex;
        align-items: center;
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
        opacity: 0.8;
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
        margin: 5% 9%;
    }

    .datos-principales {
        padding: 0 60px;
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

    .datos-principales p {
        color: #004AAD;
    }

    .datos-principales h1 {
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
        margin: 30px;
    }

    /*Productos y servicios*/
    .servicios {
        background-color: #004AAD;
        padding-bottom: 30px;
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
        margin: 5% 9%;
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

    /*socials*/
    .socials {
        margin: 5% 9%;
    }

    .redes {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .fb-column,
    .ig-column {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }

    iframe {
        border: none;
        overflow: hidden;
    }

    blockquote.instagram-media {
        background: #fff;
        border: 0;
        border-radius: 3px;
        box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 10px 0 rgba(0, 0, 0, 0.15);
        margin: 1px;
        max-width: 540px;
        min-width: 326px;
        padding: 0;
        width: 100%;
    }

    /*footer*/
    footer {
        background-color: #E76868;
    }

    .boton-titulo-footer {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #fff;
        border-radius: 50px;
        background-color: transparent;
        color: #fff;
        text-decoration: none;
        margin-top: 30px;
    }

    .marcas {
        width: 80%;
        margin: 20px;
    }

    .marcas2 {
        display: none;
    }

    .QR {
        width: 10%;
        margin: 15px;
    }

    footer p {
        font-size: 20px;
        color: #fff;
        padding: 10px;
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
            width: 95%;
            margin: 30px 0;
        }

        .QR {
            width: 20%;
            margin: 0 5px;
        }
    }

    @media screen and (max-width: 800px) {

        main p {
            font-size: 12px;
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
            font-size: 20px;
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
            font-size: 18px;
        }

        .boton-titulo-footer {
            margin: 20px 10px;
            font-size: 15px;
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

        .datos-principales h1 {
            font-size: 20px;
        }

        /*socials*/
        .redes {
            flex-direction: column;
        }

        /*contactos*/
        .datos-contacto iframe {
            width: 350px;
            height: 400px;
        }

        /*footer*/
        footer p {
            font-size: 12px;
        }
    }
</style>

<body>
    <header>
        <img src="images/logo1.png" alt="" class="logo">
        <section class="icons-social">
            <a href="https://www.facebook.com/LabDentalCongreso" target="_blank"><img src="images/facebook.png" alt="" class="icon"></a>
            <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank"><img src="images/instagram.png" alt="" class="icon"></a>
            <a href="mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar..."><img src="images/correo.png" alt="" class="icon"></a>
			<a href="https://www.tiktok.com/@labdeltal?is_from_webapp=1&sender_device=pc" target="_blank"><img src="images/tiktok.png" alt="" class="icon"></a>
            <a href="tel:11-5601-8912"><img src="images/telefono.png" alt="" class="icon"></a>
			<a href="https://maps.app.goo.gl/qNqJL3g7YrWN5gr28"><img src="images/ubicacion.png" alt="" class="icon"></a>
        </section>
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
            <div class="datos-principales">
                <center>
                    <div class="dato">
                        <h1>Personal</h1>
                        <div class="linea-celeste"></div>
                        <p>Altamente capacitado cumple con los más altos estándares de calidad en los trabajos, lo que se traduce en la obtención de los mejores resultados.</p>
                    </div>
                </center>
                <center>
                    <div class="dato">
                        <h1>Servicio</h1>
                        <div class="linea-celeste"></div>
                        <p>Nuestra metodología de trabajo garantiza entregas puntuales, lo que contribuye a reducir los costos del trabajo final.</p>
                    </div>
                </center>
                <center>
                    <div class="dato">
                        <h1>Trayectoria</h1>
                        <div class="linea-celeste"></div>
                        <p>Con 15 años de experiencia, hemos dedicado nuestro compromiso y profesionalidad al servicio de odontólogos, clínicas y laboratorios dentales.</p>
                    </div>
                </center>
            </div>
        </div>

        <div class="servicios">
            <center>
                <h2 class="boton-titulo">Productos y servicios</h2>
            </center>
            <div class="productos">
                <div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis flexibles</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis de acrilico</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis con cromo cobalto</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis arañitas</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis completas</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis parciales</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Reparación de prótesis</p>
                    </div>
                </div>
                <div>
					<div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Ajustes y modificaciones</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Rebasado de prótesis</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Retenedores dentales</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Protectores bucales</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Protectores contra bruxismo</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Coronas de acrilico</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contactos">
            <center>
                <h2 class="boton-titulo">Contáctese con nosotros</h2>
            </center>
            <div class="datos-contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7195252249057!2d-58.3892188!3d-34.61125319999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccda694bff709%3A0xd9c8fb2ea844c65c!2sLaboratorio%20Dental%20Congreso!5e0!3m2!1ses!2sar!4v1709940723165!5m2!1ses!2sar" style="margin: 0 15px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="infos">
                    <div class="info-contacto">
                        <img src="images/ubicacion.png" alt="" class="icon-contacto">
                        <p>Adolfo Alsina 1609, Piso 7 Oficina 7 <br> Monserrat - Capital Federal</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/horario.png" alt="" class="icon-contacto">
                        <p>Lun-Vie: 9:00 a 20:00 <br> Sab: 9:00 a 14:00</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/telefono.png" alt="" class="icon-contacto">
                        <p>11 5601 8912</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/whatsapp.png" alt="" class="icon-contacto">
                        <p>11 5601 8912</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/facebook.png" alt="" class="icon-contacto">
                        <p>labdentalcongreso</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/instagram.png" alt="" class="icon-contacto">
                        <p>labdentalcongreso</p>
                    </div>
                    <div class="info-contacto">
                        <img src="images/correo.png" alt="" class="icon-contacto">
                        <p>labdentalcongreso@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="socials">
            <center>
                <h2 class="boton-titulo">Seguinos en</h2>
            </center>
            <div class="redes">
                <div class="fb-column">

                </div>
                <div class="ig-column">
                    
                </div>
            </div>
        </div>
    </main>

    <footer>
        <center>
            <h2 class="boton-titulo-footer">Trabajamos con las mejores marcas y proveedores</h2>

            <div>
                <img src="images/marcas.png" class="marcas" alt="">
                <img src="images/marcas2.png" class="marcas2" alt="">
            </div>

            <div class="social-QR">
                <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank"><img src="images/insta-qr.png" alt="" class="QR"></a>
                <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank"><img src="images/wapp-qr.png" alt="" class="QR"></a>
                <a href="https://www.facebook.com/LabDentalCongreso" target="_blank"><img src="images/face-qr.png" alt="" class="QR"></a>
            </div>
        </center>
        <p>Laboratorio Dental Congreso © Copyright 2024. <br> Todos los derechos reservados.</p>
        
        <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank" class="whatsapp">
            <img src="images/icon-whats.png" class="images" style="width: 80px; height: auto; margin: 10px; position: fixed; bottom: 10px; right: 10px;">
        </a>
    </footer>
</body>

</html>