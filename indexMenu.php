
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img_menu/logo_burger.png">
    <title>GRILL BURGER</title>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="menu_css.css">
    <script defer type="text/javascript" src="menu.js"></script>
  </head>
  <body>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
      var myLandbot = new Landbot.Livechat({
        configUrl: 'https://chats.landbot.io/v3/H-1014256-GTFJ4REXW8VWFOLF/index.json',
      });
    </script>
  <!-- IDEA: MENU DE NAVEGACION ------------------------------------------------------->
    <header class="header">
      <nav class="nav">
        <a href="#"><img src="img_menu/logo_burger.png" alt=""></a>
        <button type="button" class="icon_nav" aria-label="Abrir menu"><i class="fas fa-bars"></i></button>
        <ul class="nav_menu">
          <li class="nav_menu_item"> <a href="nosotros/index_nosotros.php" class="nav_menu_link">NOSOTROS</a></li>
          <li class="nav_menu_item"> <a href="#promociones" class="nav_menu_link_promociones">INICIO</a></li>
          <li class="nav_menu_item"> <a href="carta/index_carta.php" class="nav_menu_link">NUESTRA CARTA</a></li>
          <li class="nav_menu_item"> <a href="contacto/contacto.php" class="nav_menu_link">CONTACTENOS</a></li>
          <li class="nav_menu_item"> <a href="login/login.php" class="nav_menu_link">INICIAR SESIÓN </a></li>
          <li class="nav_menu_item"> <a href="carrito/carrito.php" class="nav_menu_link_carrito">CARRITO</a></li>
        </ul>
      </nav>
    </header>
    <!--IDEA: SLIDER DE IMAGENES------------------------------------------------------------->
    <div class="conteiner-slider">
       <div class="slider" id="slider">
           <div class="slider-section" id="slider-section">
              <img class="slider-img" alt="" src="img_menu/slider1.jpg">
           </div>
           <div class="slider-section" id="slider-section">
              <img class="slider-img" alt="" src="img_menu/slider2.jpg">
           </div>
           <div class="slider-section" id="slider-section">
              <img class="slider-img" alt="" src="img_menu/slider3.jpg">
           </div>
           <div class="slider-section" id="slider-section">
              <img class="slider-img" alt="" src="img_menu/slider4.jpg">
           </div>
       </div>
       <div class="slider-btn-right" id="btn-right">&#62</div>
       <div class="slider-btn-left" id="btn-left">&#60</div>
    </div>
    <!------------------------------------ TARJETAS DE PROMOCIONES --------------------------------->
    <main id="promociones">
      <div class="conteiner-promociones">
           <div class="promociones">
               <h1 class="promociones-title">NUESTRAS PROMOCIONES</h1>
               <div class="tarjetas-promociones">
                 <div class="element" onclick="" id="promo1">
                     <img src="img_menu/promociones/combo1.png" alt="">
                     <h1>Cheese combo smashed para 2</h1>
                     <p>- 2 Cheeseburgers smashed 110g <br> - 2 papas</p>
                     <h1>A solo S/. 40.00 </h1>
                     <a href="enlaces-compra/combo1.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo2.png" alt="">
                     <h1>Combo carretillero</h1>
                     <p>- Mollejitas y Palitos de anticuchos <br>- Papas parrilleras</p>
                     <h1>A solo S/. 15.00 </h1>
                     <a href="enlaces-compra/combo2.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo3.png" alt="">
                     <h1>Piqueo Scarletti</h1>
                     <p>- 6 Tequeños de queso <br> - 6 Boliyucas <br>- 6 Trozos de chicharron con salsas</p>
                     <h1>A solo S/. 34.00 </h1>
                     <a href="enlaces-compra/combo3.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                      <img src="img_menu/promociones/combo4.png" alt="">
                      <h1>Piqueo Titanic</h1>
                      <p>- 1/4 de Pizza americana y pollo a la brasa, chorizo y mollejitas <br>- 5 Alitas BBQ, alitas picantes, alitas broaster y tequeños</p>
                      <h1>A solo S/. 99.00 </h1>
                      <a href="enlaces-compra/combo4.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo5.png" alt="">
                     <h1>Piqueo GRILL BURGER</h1>
                     <p>-Piqueo con chicharron de pollo(200gr) <br> -7 Alitas BBQ <br>- 5 Tequeños y papas fritas</p>
                     <h1>A solo S/. 46.90 </h1>
                     <a href="enlaces-compra/combo5.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo6.png" alt="">
                     <h1>Piqueo chelero</h1>
                     <p> -7 Alitas BBQ <br>- 5 Tequeños <br>- 7 Alitas broaster y papas fritas <br>- 2 Cusqueñas </p>
                     <h1>A solo S/. 45.90 </h1>
                     <a href="enlaces-compra/combo6.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo7.png" alt="">
                     <h1>-Torre de Piqueos </h1>
                     <p>- Chicharron de pollo(400gr) <br>- 5 Alitas BBQ, Broaster, Tequeños <br>- Papas fritas peruanas </p>
                     <h1>A solo S/. 59.90 </h1>
                     <a href="enlaces-compra/combo7.php"><button>Agregar</button></a>
                 </div>
                 <div class="element">
                     <img src="img_menu/promociones/combo8.png" alt="">
                     <h1> 1/2 Parrilla + gaseosa de 1L</h1>
                     <p>- Chuleta, Bife, Filete de pollo, Chorizo, Mollejitas, Anticucho <br> - Papas fritas peruanas <br>- Gaseosa de 1L</p>
                     <h1>A solo S/. 40.00 </h1>
                     <a href="enlaces-compra/combo8.php"><button>Agregar</button></a>
                 </div>
               </div>
           </div>
      </div>
    </main>
    <footer class="footer">
       <div class="footer-logo">
        <img src=" img_menu/logo_burger.png" alt="" style="width:300px; height:250px;">
       </div>
       <div class="footer_conocenos">
          <h1>Conocenos</h1>
          <ul class="redes_footer">
              <li class="footer_link"><a href="#">Zona de delivery</a> </li>
              <li class="footer_link"><a href="#">Locales</a> </li>
              <li class="footer_link"><a href="#">GRILLBURGER1231@gmail.com</a> </li>
              <li class="footer_link"><a href="#"> +51  960 229 669</a></li>
            <!--  <li class="footer_link"><a href="login/login.php?off=ok"> Cerrar Sesión</a></li> -->
          </ul>
       </div>
       <div class="footer-redes">
            <h1>Redes sociales</h1>
            <ul class="redes_footer">
              <li class="footer_link"><img src="img_menu/footer_facebook.png" alt="" style="width:30px; height:30px;"> <a href="#">Facebook </a></li>
              <li class="footer_link"><img src="img_menu/footer_instagram.png" alt="" style="width:30px; height:30px;"><a href="#">Instagram </a></li>
              <li class="footer_link"><img src="img_menu/footer_youtube.png" alt="" style="width:30px; height:25px;"><a href="#">Youtube </a></li>
              <li class="footer_link"><img src="img_menu/footer_twitter.png" alt="" style="width:30px; height:30px;"><a href="#">Twitter</a></li>
            </ul>
       </div>
       <div class="footer-promociones">
          <h1>¿Quieres recibir promociones <br> y noticias?</h1>
          <input type="text" class="correo_footer" id="insert_correo_footer" placeholder="Tu correo"> <button type="button" name="button" class="button_correo">Enviar</button>
       </div>
       <h2 class="titulo-final">©PÁGINA DESARROLLADA POR EL GRUPO 10 // El sabor de la parrilla en tu mesa</h2>
    </footer>

  </body>
</html>
