<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

     <header>
  <div class="wrapper">
    <div class="logo">
      <img src="../img/palik.png" alt="Palik" class="img-responsive">
    </div>
    <nav>
      <a class="select" href="../index.php">INICIO</a>
      <a class="select" href="nosotros.php">NOSOTROS</a>
      <a class="select" href="servicios.php">SERVICIOS</a>
      <a class="select selector" href="contacto.php">CONTACTO</a>
    </nav>
    <div class="menu-op">
      <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
      <i class="fa fa-times fa-2x cerrar" aria-hidden="true"></i>
    </div>
  </div>
</header>
<br><br>

<div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Contáctanos, estamos para servirte</h1>
    <hr> <br><br>
    <div class="col-sm-12" id="parent">
      <div class="col-sm-6">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1271109710004!2d-89.5704506708228!3d21.012332499125478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5677385dd8e605%3A0x84f40ebaaf6511e8!2sCalle+20-L+216%2C+Jardines+del+Nte.%2C+97139+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1505493959959" width="100%" height="320px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6">
        <form action="form.php" class="contact-form" method="post">
  
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="nm" placeholder="Nombre Completo" required="" autofocus="">
            </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="em" placeholder="Correo electronico" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Teléfono" required="">
          </div>
          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Escribenos tus comentarios" required=""></textarea>
          <br>
            <button class="btn btn-default btn-send"> <span class="fa fa-external-link"></span> ENVIAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container second-portion">
  <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CORREO</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@administradorapalik.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.administradorapalik.com
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">TELEFONO</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp PENDIENTE
              <!-- <br>
              <br>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254  -->
            </p>
            
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">DIRECCION</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp C. 20L #216 por 19 y 19A. Col. Fracc. La Florida, Mérida Yucatán. C.P. 97138
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>   

    <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">HORARIO</h3>
              <p>
               <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp Lunes a Viernes de 9 am a 6 pm
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes -->
    
    <!--My Portfolio  dont Copy this -->
      
  </div>
</div>

</div>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menupegajoso.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
