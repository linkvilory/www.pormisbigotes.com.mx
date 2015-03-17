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
    <title>www.pormisbigotes.com.mx</title>
    <!-- Carga de archivos Css -->
    <link href="./recursos/css/view.index/view.index.html.css" rel="stylesheet" type="text/css">
    <link href="./recursos/css/view.index/view.index.html.mediaquery.768Up.css" rel="stylesheet" type="text/css">
    <link href="./recursos/css/view.index/view.index.html.mediaquery.992Up.css" rel="stylesheet" type="text/css">
    <link href="./recursos/css/view.index/view.index.html.mediaquery.1200Up.css" rel="stylesheet" type="text/css">
    <link href="./recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- End archivos Css-->
    <!-- Carga de archivos Js -->
    <script src="./recursos/js/jquery-1.11.2.min.js"></script>
    <script src="./recursos/js/jquery-ui.min.js"></script>

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
            <div id="youtubeApiContainer">
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
    <script src="./recursos/js/init.js"></script>
    <script type="text/javascript" src="./recursos/js/swfobject.js"></script>
    <!-- End archivos Js -->
</body>
</html>