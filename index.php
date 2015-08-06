<?php
// Include and instantiate the class.
require_once 'recursos/Mobile_Detect.php';
$detect = new Mobile_Detect;
$boolDetect = 0; 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
    $boolDetect = 1;
}
 
// Any tablet device.
if( $detect->isTablet() ){
    $boolDetect = 1;
}

// Por default es una computadora
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Por Mis Bigotes - Sitio Oficial</title>
    <link rel="apple-touch-icon" sizes="57x57" href="recursos/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="recursos/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="recursos/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="recursos/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="recursos/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="recursos/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="recursos/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="recursos/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="recursos/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="recursos/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="recursos/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="recursos/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="recursos/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="recursos/favicons/manifest.json">
    <link rel="shortcut icon" href="recursos/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="recursos/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="recursos/favicons/browserconfig.xml">
    <meta name="theme-color" content="#01452a">
    
    <meta content="Por Mis Bigotes, La Aventura de un Muchacho y su Mostacho. No te pierdas la producción más bigotuda del cine.¡Pronto en cines!" name="description">
    <meta content="Pelicula, Mexicana, Por Mis Bigotes, La Aventura de un Muchacho y su Mostacho,ULISES Santiago Torres,TIO FABIÁN Jesús Ochoa,DAGOBERTO Eduardo España,DON BACILIO Fernando Becerril,NARCISO Osvaldo de León,ALICIA Gabriela Arroyo,SABINO Lenny Zundel,TIMOTEO Dario Ripoll,AQUILES José Montini,BENITO Germán Gutiérrez,LULA Fernanda Juárez,MARCELINO Armando Said Flores,ENTRENADOR Armando Hernández,PEPE GUAPO Marco Valdés,PROFESOR Roberto Blandón,ENTRENADOR RIVAL Luis Fernando Peña." name="keywords">
    <meta property="og:url" content="http://pormisbigotes.com.mx/" />
    <meta property="og:title" content="Por Mis Bigotes - Sitio Oficial" />
    <meta property="og:description" content="Por Mis Bigotes, La Aventura de un Muchacho y su Mostacho. No te pierdas la producción más bigotuda del cine.¡Pronto en cines!" />
    <meta property="og:site_name" content="pormisbigotes" />
    <meta property="og:image" content="http://pormisbigotes.com.mx/recursos/images/share.jpg" />

    <meta content="summary_large_image" name="twitter:card">
    <meta content="Por Mis Bigotes - Sitio Oficial" name="twitter:title">
    <meta content="Por Mis Bigotes, La Aventura de un Muchacho y su Mostacho. No te pierdas la producción más bigotuda del cine.¡Pronto en cines!" name="twitter:description">
    <meta content="@videocine" name="twitter:site">
    <meta content="@videocine" name="twitter:creator">
    <meta content="http://pormisbigotes.com.mx/" name="twitter:domain">
    <meta content="http://pormisbigotes.com.mx/recursos/images/share.jpg" name="twitter:image:src">
    <!-- Carga de archivos Css -->
    <link href="./recursos/css/index.html.min.ver2.css" rel="stylesheet" type="text/css">
    <link href="./recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- End archivos Css-->
    <!-- Carga de archivos Js -->
    <script src="./recursos/js/jquery-1.11.2.min.js"></script>

    <!-- End archivos js -->
</head>

<body>
    <!-- Pagina Principal del sitio www.pormisbigotes.com.mx -->
    <div class="logo"><img class="logo-container img-responsive" src=
    "recursos/images/logo-por-mis-bigotes.png"></div>

    <section class="containerDefault">
        <div class="trailer">
            <div id="showYoutubePlayer">
                <video width="100%" height="100%" loop autoplay muted>
                  <source src="recursos/video/bigotes.mp4" type="video/mp4">
                  <source src="recursos/video/bigotes.ogg" type="video/ogg">
                  <source src="recursos/video/bigotes.webm" type="video/webm">
                </video> 
                <div class="trailer-container"><img class=
                "buttonTrailer img-responsive" src=
                "recursos/images/btn-vertrailer.png" />
                </div>
            </div>
        </div>

        <div class="explorar" id="explorar">
            <div class="explorar-container"><img class=
            "buttonExplorar img-responsive" src=
            "recursos/images/btn-explorar.png" /></div>
        </div>
    </section>

    <div class="container-fluid fullscreen">
        <div class="col-md-6 col-md-offset-3 logoYoutube"><img class=
        "img-responsive" src="recursos/images/logo-por-mis-bigotes.png" /></div>

        <div class="col-md-1 youtubeClose"><img class="cerrarBoton" id=
        "closeYoutubePlayer" src="recursos/images/close.png" /></div>

        <div id="youtube" class="col-md-8 col-md-offset-2 youtube">
            <div class="col-md-4" id="youtubeApiContainer">
            </div>
            <div class="col-md-4" id="youtubeApiContainerTwo">
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2 youtubeExplorar">
            <div class="explorarSitioBoton" id="irSitioYoutubePlayer">EXPLORAR EL SITIO</div>
        </div>
    </div>
    <!-- Carga de Google Analytics -->
    <!-- End Google Analytics -->
    <!-- Carga de archivos Js -->
    <script type="text/javascript">var deviceWhat = <?php echo $boolDetect; ?></script>
    <script src="./recursos/js/bootstrap.min.js"></script>
    <script src="./recursos/js/init.ver2.js"></script>
    <script type="text/javascript" src="./recursos/js/swfobject.js"></script>
    <!-- End archivos Js -->
</body>
</html>