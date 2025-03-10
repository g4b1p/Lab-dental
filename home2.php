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
</style>

<body>
    <header>
        <nav class="menu">
            <div class="menu-item" name="Inicio">Inicio</div>
            <div class="menu-item">Nuestros servicios</div>
            <div class="menu-item">Contáctanos</div>
        </nav>

        <img src="images/logo-a-color.png" class="logo-cabecera" alt="">

        <nav class="social-media">
            <a href="https://api.whatsapp.com/send?phone=%2B541156018912&text=Hola!%20Quisiera%20hacer%20una%20consulta." target="_blank" ><img src="images/whatsapp-azul.png" class="social-icon" alt=""></a>
            <a href="https://www.facebook.com/LabDentalCongreso" target="_blank" ><img src="images/facebook-azul.png" class="social-icon" alt=""></a>
            <a href="https://www.instagram.com/labdentalcongreso/?hl=es-la" target="_blank" ><img src="images/instagram-azul.png" class="social-icon" alt=""></a>
            <a href="mailto:labdentalcongreso@gmail.com?subject=Consulta&body=Quisiera%20consultar..." target="_blank" ><img src="images/correo-azul.png" class="social-icon" alt=""></a>
            <a href="tel:11-5601-8912" target="_blank" ><img src="images/telefono-azul.png" class="social-icon" alt=""></a>
            <a href="https://maps.app.goo.gl/qNqJL3g7YrWN5gr28" target="_blank" ><img src="images/ubicacion-azul.png" class="social-icon" alt=""></a>
        </nav>
    </header>
</body>

</html>