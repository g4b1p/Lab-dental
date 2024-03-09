<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Dental Congreso</title>
    <link rel="icon" href="images/logo.png">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        header {
            background-color: #C7EAFF;
            padding: 0 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .icon {
            width: 50px;
            height: auto;
            margin-right: 5px;
        }

        .logo {
            width: 170px;
            height: auto;
        }

        .sec-ubicacion {
            display: flex;
            align-items: center;
        }

        .sec-ubicacion p {
            font-size: 18px;
            margin-left: 5px;
            color: #004AAD;
        }

        .icons-social {
            display: flex;
            align-items: center;
        }

        .icons-social p {
            font-size: 18px;
            margin-left: 5px;
            color: #004AAD;
        }

        .portada img {
            width: 100%;
            height: auto;
        }

        main {
            background-color: #C7EAFF;
        }

        .text-portada {
            position: absolute;
            top: 75%;
            left: 2%;
            background-color: #C7EAFF;
            opacity: 0.8;
            padding: 40px;
        }

        .text-portada p {
            font-size: 18px;
            color: #004AAD;
        }

        .text-portada h1 {
            color: #004AAD;
        }

        .datos-principales {
            padding: 50px;
            margin: 40px 0;
            background-color: #5483C4;
            display: flex;
            justify-content: space-between;
        }

        .dato {
            max-width: 450px;
        }

        .linea-celeste {
            margin: 6px;
            width: 50px;
            height: 4px;
            background-color: #C7EAFF;
            border-radius: 10px;
        }

        .datos-principales p {
            font-size: 18px;
            color: #fff;
        }

        .datos-principales h1 {
            color: #fff;
        }

        .contactos {
            margin: 40px 0;
        }

        .boton-titulo {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #E76868;
            border-radius: 50px;
            background-color: transparent;
            color: #E76868;
            text-decoration: none;
            margin: 30px;
        }

        .datos-contacto {
            display: flex;
            justify-content: center;
        }

        .icon-contacto {
            width: 60px;
            height: auto;
            margin-right: 15px;
            margin-bottom: 12px;
        }

        .info-contacto {
            display: flex;
            align-items: center;
        }

        .info-contacto p {
            font-size: 18px;
            color: #004AAD;
        }

        .icon-check {
            width: 30px;
            height: auto;
            margin: 10px;
        }

        .productos {
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .productos-check {
            display: flex;
            align-items: center;
        }

        .servicios {
            padding-bottom: 50px;
        }

        .servicios p {
            font-size: 18px;
            color: #004AAD;
        }

        .phone-social {
            width: auto;
            height: 750px;
            position: absolute; /* Agregar posición absoluta */
            top: -30px; /* Ajustar posición según necesites */
            left: 150px; /* Ajustar posición según necesites */
            z-index: 1; /* Asegurarse de que esté delante del iframe */
        }

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
            display: flex;
            justify-content: center;
        }

        .rectangulo {
            width: 15%;
            height: 100px;
            background-color: #fff;
            margin: 30px;
        }

        .QR {
            width: 10%;
            margin: 15px;
        }

        footer p {
            font-size: 18px;
            color: #fff;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
        <section class="sec-ubicacion">
            <img src="images/ubicacion.png" alt="" class="icon">
            <i>
                <p>Adolfo Alsina 1609, Piso 7 Oficina 7 <br> Monserrat - Capital Federal</p>
            </i>
        </section>
        <a href="home.php"><img src="images/logo.png" alt="" class="logo"></a>
        <section class="icons-social">
            <a href="" target="_blank"><img src="images/whatsapp.png" alt="" class="icon"></a>
            <a href="https://www.facebook.com/LabDentalCongreso" target="_blank"><img src="images/facebook.png" alt="" class="icon"></a>
            <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank"><img src="images/instagram.png" alt="" class="icon"></a>
            <a href="" target="_blank"><img src="images/correo.png" alt="" class="icon"></a>
            <a href="" target="_blank"><img src="images/telefono.png" alt="" class="icon"></a>
            <p>11 5601-8912</p>
        </section>
    </header>

    <main>
        <div class="portada">
            <img src="images/portada.png" alt="">
            <div class="text-portada">
                <h1>¡Bienvenidos a LabDental Congreso!</h1>
                <p> Somos especialistas en la fabricación y reparación de prótesis removibles. <br> Con nosotros, encontrarás soluciones dentales confiables y de calidad</p>
            </div>
        </div>

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

        <div class="contactos">
            <center>
                <h2 class="boton-titulo">Contáctese con nosotros</h2>
            </center>
            <div class="datos-contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7195252249057!2d-58.3892188!3d-34.61125319999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccda694bff709%3A0xd9c8fb2ea844c65c!2sLaboratorio%20Dental%20Congreso!5e0!3m2!1ses!2sar!4v1709940723165!5m2!1ses!2sar" style="margin: 0 15px;" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div>
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

        <div class="servicios">
            <center>
                <h2 class="boton-titulo">Productos y servicios</h2>
                <p>Buscamos que nuestros clientes queden satisfechos con los productos y servicios que tenemos, por eso ofrecemos:</p>
            </center>

            <div class="productos">
                <div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis flexibles, acrílico, porcelana y cromo</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Coronas de porcelana</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Pernos</p>
                    </div>
                </div>

                <div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Composturas en el día de acrílico y flexible</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Prótesis sobre implantes</p>
                    </div>
                    <div class="productos-check">
                        <img src="images/check.png" alt="" class="icon-check">
                        <p>Coronas</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="position: relative;">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLabDentalCongreso&tabs=timeline&width=400&height=700&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="400" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <img src="images/phone.png" alt="" class="phone-social">
            
        </div>
    </main>

    <footer>
        <center>
            <h2 class="boton-titulo-footer">Trabajamos con las mejores marcas y proveedores</h2>
            <div class="marcas">
                <div class="rectangulo"></div>
                <div class="rectangulo"></div>
                <div class="rectangulo"></div>
                <div class="rectangulo"></div>
                <div class="rectangulo"></div>
            </div>
            <div class="social-QR">
                <img src="images/insta-qr.png" alt="" class="QR">
                <img src="images/wapp-qr.png" alt="" class="QR">
                <img src="images/face-qr.png" alt="" class="QR">
            </div>
        </center>
        <p>Laboratorio Dental Congreso © Copyright 2023 <br> Todos los derechos reservados.</p>
        <a href="https://api.whatsapp.com/send?phone=%2B541128506874&text=Hola!%20Quisiera%20hacer%20una%20consulta" class="whatsapp">
            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" class="images" style="width: 80px; height: auto; margin: 10px; position: fixed; bottom: 15px; right: 15px;">
        </a>
    </footer>

</body>

</html>