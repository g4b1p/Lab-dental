<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .carrusel {
        position: relative;
        width: 80%;
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
        display: none; /**/
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
</style>

<body>
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

</body>

</html>