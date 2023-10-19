
<!DOCTYPE html>
<html>
<head>
    <title>Enviar un Mensaje de WhatsApp</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 2;
        }
        .content {
            text-align: center;
            max-width: 400px;
            width: 80%;
        }
        h1, form {
            text-align: center;
        }
        label, select, input, a {
            display: block;
            margin: 10px 2;
            width: 100%;
        }
        .section {
            display: flex;
            justify-content: space-between;
        }
        .whatsapp-button {
            background-color: #0074CC; /* Color de fondo azul */
            color: #fff; /* Color del texto */
            padding: 6px 16px; /* Espaciado interno */
            border: none;
            border-radius: 30px; /* Bordes redondeados */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; /* Tamaño del texto */
            margin: 4px auto; /* Margen superior e inferior automático para centrar horizontalmente */
            width: 150px; /* Ancho personalizado */
        }
        #agregarNumero {
            background-color: #0074CC; /* Color de fondo azul */
            color: #fff; /* Color del texto */
            padding: 6px 16px; /* Espaciado interno */
            border: none;
            border-radius: 30px; /* Bordes redondeados */
            text-align: center;
            font-size: 14px; /* Tamaño del texto */
            cursor: pointer;
            display: block; /* Cambiamos a 'block' para centrar horizontalmente */
            margin: 0 auto; /* Centramos horizontalmente */
            margin-left: 150px; /* Agregamos margen a la izquierda para mover a la derecha */
        }
    </style>
</head>
<body>

<div class="content">
<h1 id="titulo"></h1>
    <script>
        const titulo = document.getElementById("titulo");
        const texto = "Enviar un Mensaje de WhatsApp";

        let index = 0;

        function escribirTexto() {
            if (index < texto.length) {
                titulo.innerHTML += texto.charAt(index);
                index++;
                setTimeout(escribirTexto, 100); // Ajusta la velocidad de escritura
            }
        }

        window.onload = escribirTexto;
    </script>
    <form>
    <!--h1>Enviar un Mensaje de WhatsApp</h1>-->
        <label for="destinatario">Elige a quién enviar el mensaje:</label>
        <select id="destinatario">
            <option value="+529242122051">Хавьер Зетина</option>
            <option value="+5219241486055">Juan Felipe Reyes Alcantara</option>
            <option value="+5219241454236">Francisco Javier Zetina Murillo</option>
            <option value="+5219241782211">Alberto Ortiz Espinosa</option>
            <option value="+5219241175453">Jeber Rody Ricalde de la Barrera</option>
        </select>
        <input type="text" id="customMessage" placeholder="Mensaje personalizado">
        <div>
        <a id="whatsappLink" href="https://wa.me/NUMERO?text=MENSAJE" target="_blank" class="whatsapp-button">Enviar por WhatsApp</a>
    </div><br/>

        <label for="destinatario">Agrega un nuevo numero</label>
        <input type="text" id="customName" placeholder="Nombre del destinatario">
        <input type="text" id="customNumber" placeholder="Número personalizado">
        <div class="section">
        <div>
             <button type="button" id="agregarNumero">Agregar</button>
         </div>
           
        </div>
    </form>
</div>

<script>
    const customNumbers = JSON.parse(localStorage.getItem('customNumbers')) || [];

    // Cargar números personalizados en el menú desplegable
    const select = document.getElementById('destinatario');
    customNumbers.forEach((entry) => {
        const option = document.createElement('option');
        option.value = entry.number;
        option.text = entry.name;
        select.appendChild(option);
    });

    // Actualizar el enlace de WhatsApp cuando se elige un destinatario o se ingresa un mensaje
    function updateWhatsAppLink() {
        const destinatario = document.getElementById('destinatario').value;
        const mensaje = document.getElementById('customMessage').value;
        const link = document.getElementById('whatsappLink');
        link.href = `https://wa.me/${destinatario}?text=${encodeURIComponent(mensaje)}`;
    }

    document.getElementById('destinatario').addEventListener('change', updateWhatsAppLink);
    document.getElementById('customMessage').addEventListener('input', updateWhatsAppLink);

    document.getElementById('agregarNumero').addEventListener('click', function() {
        const customNumber = document.getElementById('customNumber').value;
        const customName = document.getElementById('customName').value;
        if (customNumber && customName) {
            const entry = { number: customNumber, name: customName };
            customNumbers.push(entry);
            // Almacenar números personalizados en localStorage
            localStorage.setItem('customNumbers', JSON.stringify(customNumbers));
            const option = document.createElement('option');
            option.value = customNumber;
            option.text = customName;
            select.appendChild(option);
            document.getElementById('customNumber').value = "";
            document.getElementById('customName').value = "";
        }
    });
</script>
</body>
</html>





<!-- enviar mensaje desde twilio--->
<!--<!DOCTYPE html>
<html>
<head>
    <title>Enviar un Mensaje</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 2;
        }
        .content {
            text-align: center;
            max-width: 400px;
            width: 80%;
        }
        h1, form {
            text-align: center;
        }
        label, input, textarea, button {
            display: block;
            margin: 10px 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="content">
    <h1>Enviar un Mensaje</h1>
    <form method="post" action="Estructura.php">
        <label for="number">Número Telefónico</label>
        <input type="text" name="number" id="number" required />
        <label for="message">Mensaje</label>
        <textarea name="message" id="messages" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>-->

<!-- enviar mensaje desde twilio--->



