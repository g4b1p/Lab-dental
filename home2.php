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
        <center><h2 class="boton-titulo">Sobre nosotros</h2></center>
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
</body>

</html>