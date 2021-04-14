<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bartender</title>
         <link rel="shortcut icon" href="../media/tequila.png">
        <link rel="stylesheet" href="css/app.css">
        <script type="text/javascript" src="js/app.js" ></script>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
          rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
          rel="stylesheet"/> 
        
    </head>
   
    <body>
        <header class="">
           <nav class="navbar navbar-expand-lg navbar-dark   scrolling-navbar fixed-top">
              <a class="navbar-brand" href="/"><img src="media/martini.png" width="50" alt=""> BARTENDER</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/nosotros">Nosotros</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                  </li>
                </ul>





                <ul class="navbar-nav nav-flex-icons">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/profile.php?id=100010771749095" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mailto:rodriguezpackito3@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/packito_rodriguez/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://wa.me/5515064688" target="_blank"><i class="fas fa-mobile-alt"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://t.me/PackitoRodriguez" target="_blank"><i class="fab fa-telegram"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
        </header>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
     
    @yield('contenido_especifico')
    @yield('pie')
    </body>

</html>