<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Flotante</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        overflow-x: hidden;
    }

    .carrusel {
        position: relative;
        margin: 0 auto;
        overflow: visible;
        width: 90%;
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

    /* Estado 2 (slide2): se desplaza un 33.333% a la izquierda mostrando image2, image3, image4 */
    #slide2:checked~.carrusel-contenedor {
        transform: translateX(-33.333%);
    }

    .flecha {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        display: none;
    }

    .flecha img {
        width: 50px;
    }

    .flecha-izq {
        left: -50px;
    }

    .flecha-der {
        right: -50px;
    }

    /* Muestra las flechas para slide1 */
    #slide1:checked~.flecha1 {
        display: block;
    }

    /* Muestra las flechas para slide2 */
    #slide2:checked~.flecha2 {
        display: block;
    }

    /* Muestra las flechas para slide3 */
    #slide3:checked~.flecha3 {
        display: block;
    }

    /* Muestra las flechas para slide4 */
    #slide4:checked~.flecha4 {
        display: block;
    }

    @media screen and (max-width: 1200px) {
        .item {
            width: calc(100% / 2);
            flex-shrink: 0;
        }

        #slide2:checked~.carrusel-contenedor {
            transform: translateX(-50%);
        }

        #slide3:checked~.carrusel-contenedor {
            transform: translateX(-100%);
        }
    }

    @media screen and (max-width: 800px) {
        .item {
            width: 100%;
            flex-shrink: 0;
        }

        #slide2:checked~.carrusel-contenedor {
            transform: translateX(-100%);
        }

        #slide3:checked~.carrusel-contenedor {
            transform: translateX(-200%);
        }

        #slide4:checked~.carrusel-contenedor {
            transform: translateX(-300%);
        }
    }
</style>

<body>

    <div class="carrusel">
        <input type="radio" name="slides" id="slide1" checked>
        <input type="radio" name="slides" id="slide2">

        <input type="radio" name="slides" id="slide3">

        <input type="radio" name="slides" id="slide4">

        <div class="carrusel-contenedor">
            <img src="images/image1.png" class="item" alt="">
            <img src="images/image2.png" class="item" alt="">
            <img src="images/image3.png" class="item" alt="">
            <img src="images/image4.png" class="item" alt="">
        </div>

        <!-- slide1 -->
        <label for="slide2" class="flecha flecha-izq flecha1">
            <img src="images/izquierda.png" alt="Ir a la segunda vista">
        </label>
        <label for="slide2" class="flecha flecha-der flecha1">
            <img src="images/derecha.png" alt="Ir a la segunda vista">
        </label>

        <!-- slide2 -->
        <label for="slide3" class="flecha flecha-izq flecha2">
            <img src="images/izquierda.png" alt="Ir a la tercera vista">
        </label>
        <label for="slide3" class="flecha flecha-der flecha2">
            <img src="images/derecha.png" alt="Ir a la tercera vista">
        </label>

        <!-- slide3 -->
        <label for="slide4" class="flecha flecha-izq flecha3">
            <img src="images/izquierda.png" alt="Volver a la segunda vista">
        </label>
        <label for="slide4" class="flecha flecha-der flecha3">
            <img src="images/derecha.png" alt="Volver a la segunda vista">
        </label>

        <!-- slide4 -->
        <label for="slide1" class="flecha flecha-izq flecha4">
            <img src="images/izquierda.png" alt="Volver a la segunda vista">
        </label>
        <label for="slide1" class="flecha flecha-der flecha4">
            <img src="images/derecha.png" alt="Volver a la segunda vista">
        </label>

    </div>

</body>

</html>