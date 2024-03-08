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
            background-color: #fff;
            padding: 0 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .icon {
            width: 40px;
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
            font-size: 17px;
            margin-left: 5px;
            color: #004AAD;
        }

        .icons-social {
            display: flex;
            align-items: center;
        }

        .icons-social p {
            font-size: 17px;
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
            top: 80%;
            left: 5%;
            background-color: #C7EAFF;
            opacity: 0.8;
            padding: 30px;
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
            <a href=""><img src="images/whatsapp.png" alt="" class="icon"></a>
            <a href=""><img src="images/facebook.png" alt="" class="icon"></a>
            <a href=""><img src="images/instagram.png" alt="" class="icon"></a>
            <a href=""><img src="images/correo.png" alt="" class="icon"></a>
            <a href=""><img src="images/telefono.png" alt="" class="icon"></a>
            <p>11 5601-8912</p>
        </section>
    </header>

    <main>
        <div class="portada">
            <img src="images/portada.png" alt="">
            <div class="text-portada">
                <h3>¡Bienvenidos a LabDental Congreso!</h3>
                <p> Somos especialistas en la fabricación y reparación de prótesis removibles. <br> Con nosotros, encontrarás soluciones dentales confiables y de calidad</p>
            </div>
        </div>
    </main>

</body>

</html>