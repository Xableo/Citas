<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>


<!--Inicio de los card de promocion-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Responsive Cards</title>
    <style>
        /* Style the card container */
        .custom-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        /* Style the title */
        .custom-title {
            color: #333;
            font-size: 1.5rem;
            margin: 10px 0;
        }

        /* Style the image */
        .custom-card-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }

        /* Style the button */
        .custom-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6 col-12"> <!-- For small screens, make each card take half the width -->
            <div class="custom-card">    
                <h4 class="custom-title">Cámaras de Vigilancia en Promoción</h4>
                <p class="mb-2"> Te recomendamos encarecidamente considerar la instalación de cámaras de vigilancia en tu propiedad.<br/> Aquí te contamos por qué:.</p><br/>
                <a class="custom-button" href="https://wa.me/5219241782211" target="_blank">Descubrir Oferta</a>

            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 col-12"> <!-- For small screens, make each card take half the width -->
            <div class="custom-card">
                <h4 class="custom-title">Mantenimiento de Cámaras</h4>
                <p class="mb-2">Contáctanos hoy mismo para obtener más información<br/>Nuestro equipo está listo para ayudarte a mantener una vigilancia efectiva y continua.</p><br/>
                <a class="custom-button" href="https://wa.me/5219241782211" target="_blank">Mas Informacion</a>

            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 col-12"> <!-- For small screens, make each card take half the width -->
            <div class="custom-card">
             <!--<img class="custom-card-image" src="image_url1.jpg" alt="Image 1">-->
                <h4 class="custom-title">Promoción Especial</h4>
                <p class="mb-2">El tiempo es limitado, así que te invitamos a contactarnos hoy mismo para obtener más información sobre esta oferta exclusiva o para realizar tu pedido</p><br/>
                <a class="custom-button" href="https://wa.me/5219241782211" target="_blank">Ver detalles</a>

            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12"> <!-- For small screens, make each card take half the width -->
            <div class="custom-card">     
                <h4 class="custom-title">Oferta de Laptops</h4>
                <p class="mb-2">Aprovecha nuestras ofertas especiales en laptops y descubre una nueva forma de trabajar, aprender y disfrutar del entretenimiento digital. Nuestro stock es limitado, así que asegúrate de contactarnos hoy mismo para obtener más información o realizar tu pedido</p><br/>
                <a class="custom-button" href="https://wa.me/5219241782211" target="_blank">Ver Ofertas</a>
            </div>
        </div>        
    </div>
</div>
</body><br/><br/><br/><br/>
</html>
<!--Termina los card-->







<!--Inicio del chatbot-->
<!DOCTYPE html>
<html>
<head>
    <title>Chatbot PC Systems</title>
</head>
<body>
    <button id="toggle-chatbot-button" class="open-chatbot-button">Chatbot</button>

    <div id="chatbot-container" class="chatbot-container">
        <div id="chat-header" class="chat-header">
            Chatbot PC Systems
            <button id="minimize-chatbot-button" class="minimize-chatbot-button">-</button>
            <button id="close-chatbot-button" class="close-chatbot-button">&times;</button>
        </div>
        <div id="chat-messages" class="chat-messages">
            <div class="chatbot">
                <p><strong>Chatbot PC Systems:</strong> ¡Hola! ¿En qué puedo ayudarte?</p>
            </div>
        </div>
        <input type="text" id="user-input" class="user-input" placeholder="Escribe tu pregunta...">
        <button id="send-button" class="send-button">Enviar</button>
    </div>

    <style>
        .open-chatbot-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        .chatbot-container {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
            font-family: Arial, sans-serif;
            max-width: 400px;
        }

        .chat-header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 16px;
            position: relative;
        }

        .chat-header button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 50%;
            cursor: pointer;
            margin-left: 5px;
        }

        .chat-messages {
            height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
        }

        .user {
            text-align: right;
            color: #007BFF;
            margin: 5px 0;
        }

        .chatbot {
            text-align: left;
            color: #333;
            margin: 5px 0;
            background-color: #f2f2f2;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .user-input {
            width: 70%;
            padding: 5px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .send-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

    <script>
        const toggleChatbotButton = document.getElementById("toggle-chatbot-button");
        const chatbotContainer = document.querySelector(".chatbot-container");
        const closeChatbotButton = document.getElementById("close-chatbot-button");
        const minimizeChatbotButton = document.getElementById("minimize-chatbot-button");
        const chatMessages = document.getElementById("chat-messages");
        const userInput = document.getElementById("user-input");
        const sendButton = document.getElementById("send-button");

        let chatbotOpen = false;
        let buttonPosition = 20; // Inicialmente, el botón se encuentra en la posición bottom: 20px

        toggleChatbotButton.addEventListener("click", function() {
            if (chatbotOpen) {
                chatbotContainer.style.display = "none";
                chatbotOpen = false;
                buttonPosition = 20; // Restablecer la posición del botón cuando se cierra el chat
            } else {
                chatbotContainer.style.display = "block";
                chatbotOpen = true;
                buttonPosition = -100; // Mover el botón hacia arriba cuando se abre el chat
            }

            toggleChatbotButton.style.bottom = `${buttonPosition}px`; // Aplicar la nueva posición al botón
        });

        closeChatbotButton.addEventListener("click", function() {
            chatbotContainer.style.display = "none";
            chatbotOpen = false;
            buttonPosition = 20; // Restablecer la posición del botón cuando se cierra el chat
            toggleChatbotButton.style.bottom = `${buttonPosition}px`; // Aplicar la nueva posición al botón
        });

        minimizeChatbotButton.addEventListener("click", function() {
            chatbotContainer.style.display = "none";
            chatbotOpen = false;
            buttonPosition = 20; // Restablecer la posición del botón cuando se minimiza el chat
            toggleChatbotButton.style.bottom = `${buttonPosition}px`; // Aplicar la nueva posición al botón
        });

        sendButton.addEventListener("click", function() {
            const question = userInput.value;
            displayMessage(question, "user");
            const answer = getChatbotResponse(question);
            displayMessage(answer, "chatbot");
            userInput.value = "";
        });

        function getChatbotResponse(question) {
            switch (question.toLowerCase()) {
              case "hola":
            return "<strong>Chatbot PC Systems:</strong> ¡Hola! ¿En qué puedo ayudarte hoy?";
            case "contacto":
            return "<strong>Chatbot PC Systems:</strong> Puedes contactarnos al teléfono <a href='tel:+5219241782211'>+521 924 178 2211</a> o por correo electrónico a <a href='mailto:rgsystems@gmail.com'>rgsystems@gmail.com</a>.";
              case "servicios":
            return "<strong>Chatbot PC Systems:</strong> Ofrecemos servicios de reparación, mantenimiento y venta de equipos de cómputo, incluyendo computadoras de escritorio, portátiles, impresoras y periféricos.";
        case "horario":
            return "<strong>Chatbot PC Systems:</strong> Nuestro horario de atención es de lunes a viernes de 9:00 a.m. a 6:00 p.m. y los sábados de 9:00 a.m. a 1:00 p.m.";
        case "cita":
            return "<strong>Chatbot PC Systems:</strong> Puedes programar una cita llamando a nuestro número de atención al cliente o utilizando nuestro sistema en línea en nuestro sitio web.";
        case "tiempo de reparacion":
            return "<strong>Chatbot PC Systems:</strong> El tiempo de reparación varía según la naturaleza del problema, pero generalmente tratamos de completar las reparaciones en 2-3 días hábiles.";
        case "reparación en el lugar":
            return "<strong>Chatbot PC Systems:</strong> Sí, ofrecemos servicios de reparación en el lugar para empresas y organizaciones que requieran asistencia en sus instalaciones.";
        case "venta de equipos":
            return "<strong>Chatbot PC Systems:</strong> Sí, vendemos tanto equipos nuevos como usados. Nuestros equipos usados son completamente revisados y restaurados para garantizar su calidad.";
        case "marcas de equipos":
            return "<strong>Chatbot PC Systems:</strong> Vendemos una amplia gama de marcas, incluyendo HP, Dell, Lenovo, Acer y muchas otras. Puedes consultar nuestro inventario para conocer las marcas disponibles.";
        case "garantía":
            return "<strong>Chatbot PC Systems:</strong> Ofrecemos una garantía de 90 días en todas las reparaciones y una garantía extendida en los equipos nuevos. Puedes obtener más detalles sobre nuestras políticas de garantía en nuestro sitio web.";
        case "métodos de pago":
            return "<strong>Chatbot PC Systems:</strong> Aceptamos pagos en efectivo, tarjetas de crédito, débito y transferencias bancarias. También ofrecemos opciones de financiamiento en ciertos casos.";
        case "descuentos para clientes frecuentes":
            return "<strong>Chatbot PC Systems:</strong> Sí, ofrecemos descuentos y programas de lealtad para clientes frecuentes. Puedes obtener más información sobre estos programas en nuestra tienda.";       
        case "horario":
            return "<strong>Chatbot PC Systems:</strong> Nuestro horario de atención es de lunes a viernes, de 9:00 AM a 5:00 PM.";
        case "contacto":
            return "<strong>Chatbot PC Systems:</strong> Puedes contactarnos al teléfono (123) 456-7890 o por correo electrónico a info@pcsystems.com.";
            default:
            return "<strong>Chatbot PC Systems:</strong> Lo siento, no puedo responder esa pregunta. ¿Hay algo más en lo que pueda ayudarte?";
            }
        }

        function displayMessage(message, sender) {
            const messageElement = document.createElement("div");
            messageElement.className = sender;
            messageElement.innerHTML = message;
            chatMessages.appendChild(messageElement);
        }
    </script>
</body>
</html>


<!--- Inicio de Google Maps --->
<!DOCTYPE html>
<html>
<head>
    <title>Mapa de Ubicación</title>
    <style>
        #map-container {
            width: 100%;
            height: 300px; /* Ajusta la altura según tu preferencia */
            display: flex;
            justify-content: flex-end;
        }

        #map {
            width: 40%; /* Ajusta el porcentaje según tu preferencia */
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.621334284227!2d-94.9118405!3d17.949807099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ea03b0b983efcf%3A0xb1fa53bee9dfedc1!2sPC%20SYSTEMS!5e0!3m2!1ses!2smx!4v1697574120654!5m2!1ses!2smx" 
            width="600" /* Ajusta el ancho según tu preferencia */
            height="300" /* Ajusta la altura según tu preferencia */
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            id="map">
        </iframe>
    </div>
</body>
</html><br/>
<!--- Final de Google Maps --->


<!-- Footer-->
<footer class="py-5 bg-dark">
            <div class="container">
              <!--<p class="m-0 text-center text-white"><a href="https://www.facebook.com/profile.php?id=100066720141305">Facebook</a></p>  -->        
            </div>

<style>
    footer {
        background-color: #212529;
        color: #fff;
        padding: 15px;
        text-align: center; /* Centra el texto en el pie de página */
    }

    .footer-sections {
        display: flex;
        flex-wrap: wrap; /* Asegura que las secciones se ajusten a la pantalla */
        justify-content: space-between;
        align-items: stretch; /* Alinea las secciones para que tengan la misma altura */
    }

    .footer-section {
        flex: 1;
        margin: 10px; /* Agrega un margen uniforme alrededor de las secciones */
        text-align: center; /* Alinea el texto a la izquierda */
        display: flex; /* Utiliza flexbox para alinear elementos verticalmente */
        flex-direction: column; /* Alinea elementos verticalmente */
    }

    .footer-section h3 {
        font-size: 1.5rem;
        margin: 0;
        margin-bottom: 10px; /* Espacio entre el encabezado y el párrafo */
    }

    .footer-section p {
        font-size: 1rem;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section li {
        margin-bottom: 7px;
    }

    .footer-section a {
        color: #fff;
        text-decoration: none;
    }
</style>

<footer>
    <div class="footer-sections">
        <div class="footer-section">
            <h3>Pc Systems</h3>
            <p>Todos los derechos reservados<br>&copy; 2023 Pc Systems y computacion</p>
        </div>
        <div class="footer-section">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="#">Qué es Pc Systems</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Plataforma</h3>
            <ul>
                <li><a href="#">Chatbot Web</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">WhatsApp Web</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Soporte</h3>
            <p>rgsystems@gmail.com<br>+521 924 178 2211</p>
        </div>
    </div>
</footer>


</footer>

   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Hoy</li>
          <li data-range-key="Yesterday">Ayer</li>
          <li data-range-key="Last 7 Days">Los últimos 7 días</li>
          <li data-range-key="Last 30 Days">Últimos 30 días</li>
          <li data-range-key="This Month">Este mes</li>
          <li data-range-key="Last Month">El mes pasado</li>
          <li data-range-key="Custom Range">Rango personalizado</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancelar</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Aplicar</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>






   