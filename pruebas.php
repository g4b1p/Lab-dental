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
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        display: inline-block;
    }

    .chat-button:hover {
        background: #e06464;
    }

    /* Contenedor del chat */
    .chat-container {
        width: 350px;
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
        width: 40px;
        height: 40px;
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
        padding: 15px;
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
    }

    .send-btn {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        margin-left: 10px;
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
        width: 60%;
        background: #a6a6a6;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        cursor: pointer;
        border-radius: 0 0 0 10px;
        font-weight: bold;
        border-right: 2px solid #fff;
    }

    .saber-mas {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 40%;
        background: #a6a6a6;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        cursor: pointer;
        border-radius: 0 0 10px 0;
        font-weight: bold;
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

</style>

<body>

    <div class="nuestros-servicios" id="nuestros-servicios">
        <center>
            <h2 class="boton-titulo">Nuestros servicios</h2>
        </center>
        <div class="productos">

            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <input type="checkbox" id="toggle" class="checkbox">
                <label for="toggle" class="saber-mas">
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
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <div class="ver-mas">SOLICITAR TURNO</div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <div class="ver-mas">SOLICITAR TURNO</div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <div class="ver-mas">SOLICITAR TURNO</div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <div class="ver-mas">SOLICITAR TURNO</div>
            </div>
            <div class="producto">
                <img src="images/image1.png" class="producto-imagen" alt="">
                <div class="overlay">
                    Las prótesis dentales flexibles son un tipo de prótesis removible que se pueden poner y quitar. Suelen estar hechas por un material llamado nylon. Se trata de un material casi transparente y que puede fabricarse de un color parecido a la encía. No requiere ningún retenedor metálico, es de un solo material y su función es abrazarse y sujetarse de los dientes y encía, por esa razón se recomienda en pacientes que aún tienen varios dientes.
                </div>
                <div class="ver-mas">SOLICITAR TURNO</div>
            </div>

        </div>

    </div>


    <!-- Botón para abrir el chat -->
    <input type="checkbox" id="chat-toggle" class="chat-toggle">
    <label for="chat-toggle" class="chat-button">
        💬 Haz click aquí para comunicarte
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

</body>

</html>