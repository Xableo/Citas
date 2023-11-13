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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01e994df18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="inc/css/Style.css">
    <title></title>
</head>
<body>
    
<div class="row mx-5">
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
      <img src="inc/imagenes/compu-hp.png" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Ventas de computadoras</strong></h4>
        <p class="card-text">
        ¡Lleva tu productividad a nuevas alturas con nuestras laptops de última generación!
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
       </div>
    </div>

    </div> 
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
    <img src="inc/imagenes/ventas-camaras.jpg" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Ventas de camaras</strong></h4>
        <p class="card-text">
        "Protege lo que más te importa con nuestras cámaras de vigilancia de alta calidad. Siempre con un ojo en tu seguridad."
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
        
      </div> 
    </div>
    
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
    <img src="inc/imagenes/ventas-impresoras.jpg" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Ventas de impresoras</strong></h4>
        <p class="card-text">
        "Imprime calidad y eficiencia en cada página. Descubre nuestras impresoras, la solución perfecta para tus necesidades de impresión."
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>      
      </div>   
    </div>
    
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
    <img src="inc/imagenes/celulares.jpg" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Ventas de Celulares</strong></h4>        
        <p class="card-text">
        "Conecta con el mundo a través de la tecnología de vanguardia. Descubre nuestros últimos modelos de teléfonos celulares y lleva la innovación contigo."
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
      </div>
    </div>
    </div>
    </div><br>


        
<div class="row mx-5">
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
      <img src="inc/imagenes/quale-sistema-operativo.png" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Sistemas Operativos</strong></h4>
        <p class="card-text">
          El tiempo es limitado, así que te invitamos a contactarnos hoy mismo para obtener más información sobre esta oferta exclusiva o para realizar tu pedido
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
        </div>
    </div>

    </div> 
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 90%;">
      <img src="inc/imagenes/ventas-camaras.jpg" class=" card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Mantenimiento de Camaras</strong></h4>
        <p class="card-text">
          Contáctanos hoy mismo para obtener más información<br/>Nuestro equipo está listo para ayudarte a mantener una vigilancia efectiva y continua
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
        </div> 
    </div>
    
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 95%;">
      <img src="inc/imagenes/Office.png" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Paqueteria de Office</strong></h4>
        <p class="card-text">
          Quieres tener el control completo de tu negocio con sistemas y software personalizados, pregunta haciendo clip Aquí
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
      </div>   
    </div>
    
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card" style="width: 95%;">
      <img src="inc/imagenes/mantenimiento-equipos.png" class="card-img-top figure-img img-fluid rounded" alt="Imagen tarjeta">
      <div class="card-body">
        <h4><strong>Promociones Especial</strong></h4>        
        <p class="card-text">
          El tiempo es limitado, así que te invitamos a contactarnos hoy mismo para obtener más información sobre esta oferta exclusiva o para realizar tu pedido 
        </p>
        <div class="text-center"> 
          <a href="https://wa.me/5219241782211" class="btn btn-outline-info">Obtener oferta</a>
        </div>
      </div>
    </div>
    </div>
    </div><br>

  <!-- Google maps -->
  <div class="card  mb-3 ps-5 ms-5" style="height:20em; width: 90%; @media (max-width: 412) {
  height: 20em; /* Cambia la altura en dispositivos móviles */
  width: auto; /* Ajusta el ancho al 100% del tamaño de la pantalla en dispositivos móviles */
}">
  <div class="row g-0">
    <div class="col-md-4 col-lg-4 col-sm-12">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.621334284227!2d-94.9118405!3d17.949807099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ea03b0b983efcf%3A0xb1fa53bee9dfedc1!2sPC%20SYSTEMS!5e0!3m2!1ses!2smx!4v1697574120654!5m2!1ses!2smx" 
            width="100%" /* Ajusta el ancho según tu preferencia */
            height="300" /* Ajusta la altura según tu preferencia */
            style="border:0;" 
            allowfullscreen="" 
            class="rounded-start"
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            >
        </iframe>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 ps-5 ms-5">
      <div class="card-body">
        <h5 class="card-title">Nos encontramos en...</h5>
        <p class="card-text">
        <i class="fa-solid fa-location-dot"></i>
        Calle Vicente Guerrero Col. Centro #502 Cp. 96000 Acayucan Ver.</p>
        <p class="card-text">
        <i class="fa-solid fa-envelope"></i>
        rgsystems@gmail.com</p>
        <p class="card-text">
        <i class="fa-solid fa-phone"></i>
        924 178 2211</p>

        
      </div>
    </div>
  </div>
</div>
      <!-- Termina Google maps -->



<!-- Chat Inteligente -->
    <button id="toggle-chatbot-button" class="open-chatbot-button"></button>

    <div id="chatbot-container" class="chatbot-container">
        <div id="chat-header" class="chat-header">
            Asistente PC Systems
            <button id="minimize-chatbot-button" class="minimize-chatbot-button">-</button>
            <button id="close-chatbot-button" class="close-chatbot-button">&times;</button>
        </div>
        <div id="chat-messages" class="chat-messages">
            <div class="chatbot">
                <p><strong>Asistente PC Systems:</strong> ¡Hola! ¿En qué puedo ayudarte?</p>
            </div>
        </div>
        <input type="text" id="user-input" class="user-input" placeholder="Escribe tu pregunta...">
        <button id="send-button" class="send-button">Enviar</button>
    </div>

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
        case "hola": case "ola": case "hello": case "HOLA":
            return "<strong>Asistente PC Systems:</strong> ¡Hola! ¿En qué puedo ayudarte hoy?";
        case "numero de contacto": case "contacto": case "Contacto":
            return "<strong>Asistente PC Systems:</strong> Puedes contactarnos al teléfono <a href='tel:+5219241782211'>+521 924 178 2211</a> o por correo electrónico a <a href='mailto:rgsystems@gmail.com'>rgsystems@gmail.com</a>.";
        case "servicios": case "que servicios ofrece": case "cuales son los servicios":
            return "<strong>Asistente PC Systems:</strong> Ofrecemos servicios de reparación, mantenimiento y venta de equipos de cómputo, incluyendo computadoras de escritorio, portátiles, impresoras y periféricos.";
        case "horario": case "HORARIO": case "Horario": case "Horario de cerrado":
            return "<strong>Asistente PC Systems:</strong> Nuestro horario de atención es de lunes a viernes de 9:00 a.m. a 6:00 p.m. y los sábados de 9:00 a.m. a 1:00 p.m.";
        case "cita": case "Quiero una cita": case "quiero una cita":
            return "<strong>Asistente PC Systems:</strong> Puedes programar una cita llamando a nuestro número de atención al cliente o utilizando nuestro sistema en línea en nuestro sitio web. agenda Tu cita";
        case "tiempo de reparacion": case "Cuantos dias lleva tiempo de reparacion": case "Tiempo de reparacion":
            return "<strong>Asistente PC Systems:</strong> El tiempo de reparación varía según la naturaleza del problema, pero generalmente tratamos de completar las reparaciones en 2-3 días hábiles.";
        case "reparación en el lugar": case "donde se repara los equipos o en que lugar": case "en donde reparan los equipos": case "o en que lugar":
            return "<strong>Asistente PC Systems:</strong> Sí, ofrecemos servicios de reparación en el lugar para empresas y organizaciones que requieran asistencia en sus instalaciones.";
        case "venta de equipos": case "que equipos tiene en venta": case "Equipos de ventas": case "que equipos me recomienda":
            return "<strong>Asistente PC Systems:</strong> Sí, vendemos tanto equipos nuevos como usados. Nuestros equipos usados son completamente revisados y restaurados para garantizar su calidad.";
        case "cuales son las camaras en ventas": case "que camaras me recomiendan": case "camaras":
            return "<strong>Asistente PC Systems:</strong> para ello favor de comunicarse a este numero de telefono <a href='tel:+5219241782211'>+521 924 178 2211</a> o por correo electrónico a <a href='mailto:rgsystems@gmail.com'>rgsystems@gmail.com</a>.";         
            case "marcas de equipos": case "las marcas de equipos": case "Marcas de equipos": case "ventas de equipos":
            return "<strong>Asistente PC Systems:</strong> Vendemos una amplia gama de marcas, incluyendo HP, Dell, Lenovo, Acer y muchas otras. Puedes consultar nuestro inventario para conocer las marcas disponibles.";
        case "seguro": case "garantia": case "cuanto tiempo de garantia nos da al año": case "Limite de la garantia del equipo": case "a cuantos plasos son las garantias":
            return "<strong>Asistente PC Systems:</strong> Ofrecemos una garantía de 90 días en todas las reparaciones y una garantía extendida en los equipos nuevos. Puedes obtener más detalles sobre nuestras políticas de garantía en nuestro sitio web. o a este numero de telefono<a href='tel:+5219241782211'>Llamar al número</a> <a href='https://wa.me/5219241782211'>Enviar mensaje de WhatsApp</a>";
            case "Metodos de pagos": case "metodos de pago": case "metodos de pagos": case "que metodo de pagos tienen": case "como puedo pagar": case "que tarjetas validan":
            return "<strong>Asistente PC Systems:</strong> Aceptamos pagos en efectivo, tarjetas de crédito, débito y transferencias bancarias. También ofrecemos opciones de financiamiento en ciertos casos.<a href='https://wa.me/5219241782211'>Enviar mensaje de WhatsApp</a>";
        case "descuentos para clientes frecuentes":
            return "<strong>Asistente PC Systems:</strong> Sí, ofrecemos descuentos y programas de lealtad para clientes frecuentes. Puedes obtener más información sobre estos programas en nuestra tienda.";
        default:
            return "<strong>Asistente PC Systems:</strong> Lo siento, no puedo responder esa pregunta. ¿Hay algo más en lo que pueda ayudarte?";
    }
}


        function displayMessage(message, sender) {
            const messageElement = document.createElement("div");
            messageElement.className = sender;
            messageElement.innerHTML = message;
            chatMessages.appendChild(messageElement);
        }
    </script>
<!-- Termina Chat Inteligente -->
    

    
<!-- Pie de la pagina-->
<footer class="py-5 bg-dark">
 <div class="container"></div>
<footer>
    <div class="footer-sections">
        <div class="footer-section">
            <h3>Pc Systems</h3>
            <p>Todos los derechos reservados<br>&copy; Copyright 2023- Todos los derechos<br> PC SYSTEMS Y COMPUTACION</p>
        </div>
        <div class="footer-section">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61552364255322">Qué es Pc Systems</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Plataforma</h3>
            <ul>
                <li><a href="#">Asistente en linea</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61552364255322">Facebook</a></li>
                <li><a href="#">WhatsApp Web</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Soporte</h3>
            <p>
  <a href="mailto:rgsystems@gmail.com">rgsystems@gmail.com</a><br>
  <a href="https://wa.me/9241782211">924 178 2211</a><br>
  <a href="https://www.facebook.com/profile.php?id=61552364255322" target="_blank"></a>
</p>
</div>
</div>
</footer>
</footer>
<!-- Termina pie de pagina -->

</body>
</html>

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






   