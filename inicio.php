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
			<link type="text/css" rel="stylesheet" href="./recursos/css/inicio.html.min.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/bootstrap.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/responsiveslides.min.css"/>
		<!-- End archivos Css-->

		<!-- Carga de archivos Js -->
			<script src="./recursos/js/jquery-1.11.2.min.js"></script>
			<script src="./recursos/js/jquery.html5Loader.min.js"></script>
			<script type="text/javascript">
    
			    $.html5Loader({
			        filesToLoad: 'recursos/files.json', // this could be a JSON or simply a javascript object
			        onBeforeLoad: function () {},
			        onComplete: function () {
			            //console.log('fin');
			            $('#preloader').hide();
			        },
			        onElementLoaded: function ( obj, elm) { },
			        onUpdate: function ( percentage ) {
			        	//console.log("Porcentaje: " + percentage);
			            var nuevo = percentage-100;
			            //console.log("Left: " + nuevo);
			            $('#preloader').find('.cargando').find('div').animate({'left':nuevo + '%'});
			            if(nuevo > 90){
			            	$('#preloader').hide();
			            }
			        }
			    });

	    	</script>
		<!-- End archivos js -->

	</head>
	<body>
	<!-- Facebook Init -->
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '720965681362308',
	      xfbml      : true,
	      version    : 'v2.3'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- End Facebook Init -->
	<!-- Preloader -->
    <div id="preloader" class="preloader" style="">
        <div class="logopre"><img class="img-responsive" src="recursos/images/logo-por-mis-bigotes.png"/></div>
        <div class="cargando"><div style=""></div></div>
    </div>  
    <!-- End Preloader -->

	<!-- Pagina Principal del sitio www.pormisbigotes.com.mx -->	

	<div class="logo">
		<img class="logo-container img-responsive" src="recursos/images/logo-por-mis-bigotes.png"/>
	</div>

	<div id="toogleMenu" class="botonMenu">
		<span>MENÚ</span>
	</div>

	<nav id="menu" class="menu">
		<div class="menu-container">
			<ul>
				<li class="enlace trailer">
					<a id="showYoutubePlayer"><span>Ver Trailer</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionSinopsis"><span>Sinópsis</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionConocelos"><span>Personajes</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionGaleria"><span>Galería</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionPremios"><span>Prensa</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionCreditos"><span>Ficha Técnica</span></a>
				</li>
				<li class="enlace visible-xs-block">
					<hr>
				</li>
				<li class="enlace visible-xs-block">
					<div id="facebookMenu" class="facebookMenu"></div>
					<div id="twitterMenu" class="twitterMenu"></div>
				</li>
				<li class="enlace visible-xs-block">
					<div id="instagramMenu" class="instagramMenu"></div>
					<div id="youtubeMenu" class="youtubeMenu"></div>
				</li>
			</ul>
		</div>
	</nav>

	<section id="seccionBienvenida" class="seccionBienvenida">
		<div class="bienvenida-container-inner">
			<h1>LA AVENTURA DE UN MUCHACHO Y SU MOSTACHO</h1>
		</div>
	</section>

	<section id="seccionNoticias" class="seccionNoticias">
		<div class="cortina"></div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 noticias-container">
			<h1>ÚLTIMAS NOTICIAS</h1>

			<div class="noticiasDesktop">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
					<div class="fb-page" data-href="https://www.facebook.com/videocine.distribucion?fref=ts" data-height="490" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/videocine.distribucion?fref=ts"><a href="https://www.facebook.com/videocine.distribucion?fref=ts">VIDEOCINE DISTRIBUCIÓN</a></blockquote></div></div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
					<a class="twitter-timeline"  href="https://twitter.com/videocine" data-widget-id="616274791075483648">Tweets por el @videocine.</a>
            		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/4PU6tjJyRA/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">El saludo de 3 dedos se muestra en Tlatelolco #SinsajoElFinal #Únete</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Una foto publicada por Videocine (@videocine) el <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-06-22T17:16:29+00:00">22 de Jun de 2015 a la(s) 10:16 PDT</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
				</div>
			</div>
		</div>
			
	</section>

	<section id="seccionSinopsis" class="seccionSinopsis">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 sinopsis-container">
			<h1>SINÓPSIS</h1>
			<br>
			<p>AUNQUE SUENE INCREÍBLE,</p>
			<p>AL PEQUEÑO ULISES DE TAN SÓLO NUEVE AÑOS,</p>
			<p>DE UN DÍA PARA OTRO <b>LE CRECIÓ EL BIGOTE.</b></p>
			<br>
			<p>ESTA SITUACIÓN, EN APARIENCIA ORDINARIA,</p>
			<p>DESATA UNA SERIE DE ACONTECIMIENTOS EXTRAORDINARIOS,</p>
			<p>PARA ÉL, SU MAMÁ Y SUS MEJORES AMIGOS.</p>
			<br>
			<p>A PARTIR DE ESE MOMENTO TODOS ELLOS,</p>
			<p>Y OTROS MUY CURIOSOS PERSONAJES SE VERÁN ENVUELTOS</p>
			<p>EN ESTA PELUDA AVENTURA.</p>
		</div>
	</section>

	<section id="seccionGaleriaEstaticaParteUno" class="seccionGaleriaEstaticaParteUno">

	</section>

	<section id="seccionConocelos" class="seccionConocelos">
		<h1>CONÓCELOS</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 seccionConocelos-inner">

				<div id="sceneConocelosMobile" class="sceneConocelosMobile">
					<div class="col-xs-6 col-sm-6">
						<img data-header="Ulises" data-image="recursos/images/personajesBio/ulises.jpg" data-detail="Tiene nueve años, es hijo único y vive solo con su mamá. Le gusta el karate y le fascinan los ninjas, aunque no por sus hazañas, armas o destreza; lo que le atrae de esos misteriosos personajes es su capacidad para esconderse. Y es que el máximo sueño de Ulises es ser invisible ¿por qué? para que nadie lo moleste. A él le encanta pasar desapercibido pues, asegura, las cosas resultan mucho más sencillas cuando la gente simplemente no se fija en ti." class="imageInfo personaje" src="recursos/images/personajes/mobile/ulises.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Marcelino" data-image="recursos/images/personajesBio/marcelino.jpg" data-detail="Sin duda el cerebro del equipo. Marcelino es noble y el mejor amigo, aunque su corazón es débil y enamoradizo. Marcelino es un gran observador, mira todo a detalle y en su cabeza lo clasifica, ordena y selecciona; observa las intenciones de las personas, mira cuando la gente es honesta, cuando está contenta o triste, cuando están alegres pero también cuando no dicen la verdad. Y claro, también sueña con ser invisible." class="imageInfo personaje" src="recursos/images/personajes/mobile/marcelino.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Nati" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Nati tiene un olfato privilegiado para todas las cosas que se pondrán de moda. Ella puede ver antes que nadie las tendencias que se usarán en la nueva temporada, colores, texturas, canciones, películas. Si quieres conocer lo más moderno deberás acercarte a Nati." class="imageInfo personaje" src="recursos/images/personajes/mobile/nati.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Tío Fabían" data-image="recursos/images/personajesBio/tio-fabian.jpg" data-detail="Un personaje alegre de carácter extrovertido. Con su mirada peculiar y su poder de convencimiento es capaz de conmover al más reacio. A pesar de esto, es un tanto solitario y suele alejarse por largos periodos de tiempo. Amante de los autos antiguos tiene una colección de miles de carritos de juguete." class="imageInfo personaje" src="recursos/images/personajes/mobile/tio-fabian.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende dulces en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura." class="imageInfo personaje" src="recursos/images/personajes/mobile/alicia.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Sabino" data-image="recursos/images/personajesBio/sabino.jpg" data-detail="La sabiduría de Sabino sorprende a todo mundo. Sus vastos conocimientos van desde las más oscuras citas literarias hasta los datos científicos más enredados. Él, desde luego, es el encargado de llevar la biblioteca del Club de los 10,000 bigotes,  un sótano con más de doce mil ejemplares que abarcan todas las áreas del saber." class="imageInfo personaje" src="recursos/images/personajes/mobile/sabino.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-6 col-sm-6">
						<img data-header="Don Bacilio" data-image="recursos/images/personajesBio/don-bacilio.jpg" data-detail="Su fuerte personalidad siempre impresiona a aquel que lo conoce. Aunque se debe decir que detrás de esa aparente severidad, hay un muy buen hombre. Es jubilado, de más joven fue un muy reconocido abogado, celebrado en el ámbito profesional sobre todo por ser el más justo de los jueces." class="imageInfo personaje" src="recursos/images/personajes/mobile/don-bacilio.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Dagoberto" data-image="recursos/images/personajesBio/dagoberto.jpg" data-detail="Poco gente tiene tan mal carácter como Dagoberto. Él es el tipo de persona que se enoja si vuela la mosca, si no, si hace ruido, si no, si es verde o negra, se enoja hasta con la mosca ¿y por qué no? con el resto de los animales. Y aunque tiene pésimo carácter los miembros del Club han aprendido a aceptarlo." class="imageInfo personaje" src="recursos/images/personajes/mobile/dagoberto.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Benito" data-image="recursos/images/personajesBio/benito.jpg" data-detail="Es sin duda, el más noble de todos los bigotones, su bondad no conoce límite. Tiene alma de niño y corazón de gigante. Nada le importa más que ayudar los otros. Siempre que tengas un problema, Benito seguro te escuchará y dará un consejo que despejará tus dudas." class="imageInfo personaje" src="recursos/images/personajes/mobile/benito.png"/>
					</div>					
					<div class="col-xs-6 col-sm-6">
						<img data-header="Narciso" data-image="recursos/images/personajesBio/narciso.jpg" data-detail="Se considera como el más atractivo de todos los bigotones, cuida su vestimenta, peinado, pero sobre todo, su bigote. Es él quien lleva los consejos de cuidado de bigotes al club, investiga acerca de los mejor shampoos, acondicionadores, cepillos, peines y tijeras para despuntar mejor el mostacho." class="imageInfo personaje" src="recursos/images/personajes/mobile/narciso.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Timoteo" data-image="recursos/images/personajesBio/timoteo.jpg" data-detail="La timidez de Timoteo es tan grande que lo aplasta como un elefante a una nuez. Sin embargo, una vez que logra vencer a esa coraza de miedo que en ocasiones lo paraliza, es posible descubrir a un hombre inteligente, agradable y con un sentido del humor brillante." class="imageInfo personaje" src="recursos/images/personajes/mobile/timoteo.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Aquiles" data-image="recursos/images/personajesBio/aquiles.jpg" data-detail="A muchos les impone el físico de Aquiles. Su estatura y voz gruesa provoca terror en más de uno. Sin embargo él no es nada malo, al contrario, es muy generoso y hasta tiene un hospital para cachorros abandonados, en él, siempre que puede adopta gatitos o perros sin hogar." class="imageInfo personaje" src="recursos/images/personajes/mobile/aquiles.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-6 col-sm-6">
						<img data-header="Pepe Guapo" data-image="recursos/images/personajesBio/pepe.jpg" data-detail="Muchos piensan que los guapos son tontos, y tal vez haya algunos que cumplan con eso, sin embargo no podría decirse que Pepe Guapo es tonto, aunque tampoco se podría decir que es muy listo. Él tiene una personalidad poco común. Sus consejos suelen ser ambiguos, y en ellos uno es quien debe encontrar el sentido." class="imageInfo personaje" src="recursos/images/personajes/mobile/pepe.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Lucy" data-image="recursos/images/personajesBio/lucy.jpg" data-detail="Sin duda la niña más bonita de la escuela. Casi todos los niños están enamorados de ella, abiertamente o en secreto. Su correo electrónico recibe unas cinco declaraciones al día y muchas más los fines de semana. Es también la más popular entre las niñas pues casi todas desean ser su amiga." class="imageInfo personaje" src="recursos/images/personajes/mobile/lucy.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="El 'Taquito' Pérez" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Muchas madres durante el embarazo ponen música clásica a sus bebés, pero la mamá de El 'Taquito' Pérez le ponía a su hijo, juegos de futbol pues sólo eso lo calmaba. Su amor por el futbol es innato, aprendió primero a patear un balón que a caminar. Tiene una talento natural con la pelota y es una futura promesa del balompié." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-1.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella tan estudiosa, que a veces ya piensa en la universidad en la que le gustaría estudiar de grande, y eso que apenas tiene ocho años. Por desgracia, ese gusto hacia el estudio no es muy bien visto entre sus compañeros que constantemente la molestan por aplicada." class="imageInfo personaje" src="recursos/images/personajes/mobile/nina-lentes.png"/>
					</div>
					
					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Niño Comentarista" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Mientras todo el mundo ve al futbol para seguir a su equipo, un jugador favorito o incluso el estilo de un entrenador, comentarista ve los partidos para escuchar a los comentaristas. A él le encantan las narraciones de los partidos, las estudia y desde muy pequeño narra los juegos de sus compañeros." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-2.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
					</div>

				</div>

				<div id="sceneConocelosTablet" class="sceneConocelosTablet">
					<div class="col-xs-4 col-sm-4">
						<img data-header="Marcelino" data-image="recursos/images/personajesBio/marcelino.jpg" data-detail="Sin duda el cerebro del equipo. Marcelino es noble y el mejor amigo, aunque su corazón es débil y enamoradizo. Marcelino es un gran observador, mira todo a detalle y en su cabeza lo clasifica, ordena y selecciona; observa las intenciones de las personas, mira cuando la gente es honesta, cuando está contenta o triste, cuando están alegres pero también cuando no dicen la verdad. Y claro, también sueña con ser invisible." class="imageInfo personaje" src="recursos/images/personajes/mobile/marcelino.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Ulises" data-image="recursos/images/personajesBio/ulises.jpg" data-detail="Tiene nueve años, es hijo único y vive solo con su mamá. Le gusta el karate y le fascinan los ninjas, aunque no por sus hazañas, armas o destreza; lo que le atrae de esos misteriosos personajes es su capacidad para esconderse. Y es que el máximo sueño de Ulises es ser invisible ¿por qué? para que nadie lo moleste. A él le encanta pasar desapercibido pues, asegura, las cosas resultan mucho más sencillas cuando la gente simplemente no se fija en ti." class="imageInfo personaje" src="recursos/images/personajes/mobile/ulises.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Nati" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Nati tiene un olfato privilegiado para todas las cosas que se pondrán de moda. Ella puede ver antes que nadie las tendencias que se usarán en la nueva temporada, colores, texturas, canciones, películas. Si quieres conocer lo más moderno deberás acercarte a Nati. " class="imageInfo personaje" src="recursos/images/personajes/mobile/nati.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-4 col-sm-4">
						<img data-header="Tío Fabían" data-image="recursos/images/personajesBio/tio-fabian.jpg" data-detail="Un personaje alegre de carácter extrovertido. Con su mirada peculiar y su poder de convencimiento es capaz de conmover al más reacio. A pesar de esto, es un tanto solitario y suele alejarse por largos periodos de tiempo. Amante de los autos antiguos tiene una colección de miles de carritos de juguete." class="imageInfo personaje" src="recursos/images/personajes/mobile/tio-fabian.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende dulces en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura." class="imageInfo personaje" src="recursos/images/personajes/mobile/alicia.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Sabino" data-image="recursos/images/personajesBio/sabino.jpg" data-detail="La sabiduría de Sabino sorprende a todo mundo. Sus vastos conocimientos van desde las más oscuras citas literarias hasta los datos científicos más enredados. Él, desde luego, es el encargado de llevar la biblioteca del Club de los 10,000 bigotes,  un sótano con más de doce mil ejemplares que abarcan todas las áreas del saber." class="imageInfo personaje" src="recursos/images/personajes/mobile/sabino.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-4 col-sm-4">
						<img data-header="Don Bacilio" data-image="recursos/images/personajesBio/don-bacilio.jpg" data-detail="Su fuerte personalidad siempre impresiona a aquel que lo conoce. Aunque se debe decir que detrás de esa aparente severidad, hay un muy buen hombre. Es jubilado, de más joven fue un muy reconocido abogado, celebrado en el ámbito profesional sobre todo por ser el más justo de los jueces." class="imageInfo personaje" src="recursos/images/personajes/mobile/don-bacilio.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Dagoberto" data-image="recursos/images/personajesBio/dagoberto.jpg" data-detail="Poco gente tiene tan mal carácter como Dagoberto. Él es el tipo de persona que se enoja si vuela la mosca, si no, si hace ruido, si no, si es verde o negra, se enoja hasta con la mosca ¿y por qué no? con el resto de los animales. Y aunque tiene pésimo carácter los miembros del Club han aprendido a aceptarlo." class="imageInfo personaje" src="recursos/images/personajes/mobile/dagoberto.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Benito" data-image="recursos/images/personajesBio/benito.jpg" data-detail="Es sin duda, el más noble de todos los bigotones, su bondad no conoce límite. Tiene alma de niño y corazón de gigante. Nada le importa más que ayudar los otros. Siempre que tengas un problema, Benito seguro te escuchará y dará un consejo que despejará tus dudas." class="imageInfo personaje" src="recursos/images/personajes/mobile/benito.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-4 col-sm-4">
						<img data-header="Narciso" data-image="recursos/images/personajesBio/narciso.jpg" data-detail="Se considera como el más atractivo de todos los bigotones, cuida su vestimenta, peinado, pero sobre todo, su bigote. Es él quien lleva los consejos de cuidado de bigotes al club, investiga acerca de los mejor shampoos, acondicionadores, cepillos, peines y tijeras para despuntar mejor el mostacho." class="imageInfo personaje" src="recursos/images/personajes/mobile/narciso.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Timoteo" data-image="recursos/images/personajesBio/timoteo.jpg" data-detail="La timidez de Timoteo es tan grande que lo aplasta como un elefante a una nuez. Sin embargo, una vez que logra vencer a esa coraza de miedo que en ocasiones lo paraliza, es posible descubrir a un hombre inteligente, agradable y con un sentido del humor brillante." class="imageInfo personaje" src="recursos/images/personajes/mobile/timoteo.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Aquiles" data-image="recursos/images/personajesBio/aquiles.jpg" data-detail="A muchos les impone el físico de Aquiles. Su estatura y voz gruesa provoca terror en más de uno. Sin embargo él no es nada malo, al contrario, es muy generoso y hasta tiene un hospital para cachorros abandonados, en él, siempre que puede adopta gatitos o perros sin hogar." class="imageInfo personaje" src="recursos/images/personajes/mobile/aquiles.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-4 col-sm-4">
						<img data-header="Pepe Guapo" data-image="recursos/images/personajesBio/pepe.jpg" data-detail="Muchos piensan que los guapos son tontos, y tal vez haya algunos que cumplan con eso, sin embargo no podría decirse que Pepe Guapo es tonto, aunque tampoco se podría decir que es muy listo. Él tiene una personalidad poco común. Sus consejos suelen ser ambiguos, y en ellos uno es quien debe encontrar el sentido." class="imageInfo personaje" src="recursos/images/personajes/mobile/pepe.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Lucy" data-image="recursos/images/personajesBio/lucy.jpg" data-detail="Sin duda la niña más bonita de la escuela. Casi todos los niños están enamorados de ella, abiertamente o en secreto. Su correo electrónico recibe unas cinco declaraciones al día y muchas más los fines de semana. Es también la más popular entre las niñas pues casi todas desean ser su amiga." class="imageInfo personaje" src="recursos/images/personajes/mobile/lucy.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella es tan estudiosa, que a sus ocho años ya piensa en la universidad en la que le gustaría estudiar cuando sea mayor. Por desgracia, el gusto por el estudio no es muy bien visto por sus compañeros quienes constantemente la molestan por ser aplicada." class="imageInfo personaje" src="recursos/images/personajes/mobile/nina-lentes.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-4 col-sm-4">
						<img data-header="El 'Taquito' Pérez" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Muchas madres durante el embarazo ponen música clásica a sus bebés, pero la mamá de El 'Taquito' Pérez le ponía a su hijo, juegos de futbol pues sólo eso lo calmaba. Su amor por el futbol es innato, aprendió primero a patear un balón que a caminar. Tiene una talento natural con la pelota y es una futura promesa del balompié." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-1.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Niño Comentarista" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Mientras todo el mundo ve al futbol para seguir a su equipo, un jugador favorito o incluso el estilo de un entrenador, comentarista ve los partidos para escuchar a los comentaristas. A él le encantan las narraciones de los partidos, las estudia y desde muy pequeño narra los juegos de sus compañeros. " class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-2.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
					</div>

				</div>
				
				<ul id="sceneConocelos" class="sceneConocelos">
				<!-- Primera Fila -->
				  <li class="layer" data-depth="0.10">
				  	<div class="conoceloContainerUno ">
				  		<div class="bubbleInfo" data-header="El 'Taquito' Pérez" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Muchas madres durante el embarazo ponen música clásica a sus bebés, pero la mamá de El 'Taquito' Pérez le ponía a su hijo, juegos de futbol pues sólo eso lo calmaba. Su amor por el futbol es innato, aprendió primero a patear un balón que a caminar. Tiene una talento natural con la pelota y es una futura promesa del balompié.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje" src="recursos/images/personajes/nino-fut.png"/>
				  		<img class="personaje sombra pUno" src="recursos/images/personajes/nino-fut-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.10">
				  	<div class="conoceloContainerDos ">
				  		<div class="bubbleInfo" data-header="Niño Comentarista" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Mientras todo el mundo ve al futbol para seguir a su equipo, un jugador favorito o incluso el estilo de un entrenador, comentarista ve los partidos para escuchar a los comentaristas. A él le encantan las narraciones de los partidos, las estudia y desde muy pequeño narra los juegos de sus compañeros.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/nino-traje.png"/>
				  		<img class="personaje sombra pDos" src="recursos/images/personajes/nino-traje-s.png"/>
				  	</div>
				  </li>
				<!-- Segunda Fila -->  
				<li class="layer" data-depth="0.15">
				  	<div class="conoceloContainerTres ">
				  		<div class="bubbleInfo" data-header="Pepe Guapo" data-image="recursos/images/personajesBio/pepe.jpg" data-detail="Muchos piensan que los guapos son tontos, y tal vez haya algunos que cumplan con eso, sin embargo no podría decirse que Pepe Guapo es tonto, aunque tampoco se podría decir que es muy listo. Él tiene una personalidad poco común. Sus consejos suelen ser ambiguos, y en ellos uno es quien debe encontrar el sentido.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/pepe.png"/>
				  		<img class="personaje sombra pTres" src="recursos/images/personajes/pepe-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.15">
				  	<div class="conoceloContainerCuatro ">
				  		<div class="bubbleInfo" data-header="Sabino" data-image="recursos/images/personajesBio/sabino.jpg" data-detail="La sabiduría de Sabino sorprende a todo mundo. Sus vastos conocimientos van desde las más oscuras citas literarias hasta los datos científicos más enredados. Él, desde luego, es el encargado de llevar la biblioteca del Club de los 10,000 bigotes,  un sótano con más de doce mil ejemplares que abarcan todas las áreas del saber.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/sabino.png"/>
				  		<img class="personaje sombra pCuatro" src="recursos/images/personajes/sabino-s.png"/>
				  	</div>
				  </li>
				  <!-- Tercera Fila -->  
				<li class="layer" data-depth="0.2">
				  	<div class="conoceloContainerCinco ">
				  		<div class="bubbleInfo" data-header="Narciso" data-image="recursos/images/personajesBio/narciso.jpg" data-detail="Se considera como el más atractivo de todos los bigotones, cuida su vestimenta, peinado, pero sobre todo, su bigote. Es él quien lleva los consejos de cuidado de bigotes al club, investiga acerca de los mejor shampoos, acondicionadores, cepillos, peines y tijeras para despuntar mejor el mostacho.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/narciso.png"/>
				  		<img class="personaje sombra pCinco" src="recursos/images/personajes/narciso-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.2">
				  	<div class="conoceloContainerSeis ">
				  		<div class="bubbleInfo" data-header="Aquiles" data-image="recursos/images/personajesBio/aquiles.jpg" data-detail="A muchos les impone el físico de Aquiles. Su estatura y voz gruesa provoca terror en más de uno. Sin embargo él no es nada malo, al contrario, es muy generoso y hasta tiene un hospital para cachorros abandonados, en él, siempre que puede adopta gatitos o perros sin hogar.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/aquiles.png"/>
				  		<img class="personaje sombra pSeis" src="recursos/images/personajes/aquiles-s.png"/>
				  	</div>
				  </li>
				 <!-- Cuarta Fila -->  
				<li class="layer" data-depth="0.25">
				  	<div class="conoceloContainerSiete ">
				  		<div class="bubbleInfo" data-header="Timoteo" data-image="recursos/images/personajesBio/timoteo.jpg" data-detail="La timidez de Timoteo es tan grande que lo aplasta como un elefante a una nuez. Sin embargo, una vez que logra vencer a esa coraza de miedo que en ocasiones lo paraliza, es posible descubrir a un hombre inteligente, agradable y con un sentido del humor brillante.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/timoteo.png"/>
				  		<img class="personaje sombra pSiete" src="recursos/images/personajes/timoteo-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.25">
				  	<div class="conoceloContainerOcho ">
				  		<div class="bubbleInfo" data-header="Dagoberto" data-image="recursos/images/personajesBio/dagoberto.jpg" data-detail="Poco gente tiene tan mal carácter como Dagoberto. Él es el tipo de persona que se enoja si vuela la mosca, si no, si hace ruido, si no, si es verde o negra, se enoja hasta con la mosca ¿y por qué no? con el resto de los animales. Y aunque tiene pésimo carácter los miembros del Club han aprendido a aceptarlo.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/dagoberto.png"/>
				  		<img class="personaje sombra pOcho" src="recursos/images/personajes/dagoberto-s.png"/>
				  	</div>
				  </li> 
				  <!-- Quinta Fila -->  
				<li class="layer" data-depth="0.3">
				  	<div class="conoceloContainerNueve ">
				  		<div class="bubbleInfo" data-header="Tío Fabían" data-image="recursos/images/personajesBio/tio-fabian.jpg" data-detail="Un personaje alegre de carácter extrovertido. Con su mirada peculiar y su poder de convencimiento es capaz de conmover al más reacio. A pesar de esto, es un tanto solitario y suele alejarse por largos periodos de tiempo. Amante de los autos antiguos tiene una colección de miles de carritos de juguete.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/tio-fabian.png"/>
				  		<img class="personaje sombra pNueve" src="recursos/images/personajes/tio-fabian-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.3">
				  	<div class="conoceloContainerDiez ">
				  		<div class="bubbleInfo" data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende dulces en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/alicia.png"/>
				  		<img class="personaje sombra pDiez" src="recursos/images/personajes/alicia-s.png"/>
				  	</div>
				  </li> 
				   <!-- Quinta Fila -->  
				<li class="layer" data-depth="0.32">
				  	<div class="conoceloContainerOnce ">
				  		<div class="bubbleInfo" data-header="Don Bacilio" data-image="recursos/images/personajesBio/don-bacilio.jpg" data-detail="Su fuerte personalidad siempre impresiona a aquel que lo conoce. Aunque se debe decir que detrás de esa aparente severidad, hay un muy buen hombre. Es jubilado, de más joven fue un muy reconocido abogado, celebrado en el ámbito profesional sobre todo por ser el más justo de los jueces.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/don-bacilio.png"/>
				  		<img class="personaje sombra pOnce" src="recursos/images/personajes/don-bacilio-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.4">
				  	<div class="conoceloContainerDoce ">
				  		<div class="bubbleInfo" data-header="Ulises" data-image="recursos/images/personajesBio/ulises.jpg" data-detail="Tiene nueve años, es hijo único y vive solo con su mamá. Le gusta el karate y le fascinan los ninjas, aunque no por sus hazañas, armas o destreza; lo que le atrae de esos misteriosos personajes es su capacidad para esconderse. Y es que el máximo sueño de Ulises es ser invisible ¿por qué? para que nadie lo moleste. A él le encanta pasar desapercibido pues, asegura, las cosas resultan mucho más sencillas cuando la gente simplemente no se fija en ti.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/ulises.png"/>
				  		<img class="personaje sombra pDoce" src="recursos/images/personajes/ulises-s.png"/>
				  	</div>
				  </li>  
				  <li class="layer" data-depth="0.35">
				  	<div class="conoceloContainerTrece ">
				  		<div class="bubbleInfo" data-header="Nati" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Nati tiene un olfato privilegiado para todas las cosas que se pondrán de moda. Ella puede ver antes que nadie las tendencias que se usarán en la nueva temporada, colores, texturas, canciones, películas. Si quieres conocer lo más moderno deberás acercarte a Nati. ">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/lula.png"/>
				  		<img class="personaje sombra pTrece" src="recursos/images/personajes/lula-s.png"/>
				  	</div>
				  </li> 
				  <!-- Sexta Fila -->  
				<li class="layer" data-depth="0.44">
				  	<div class="conoceloContainerCatorce ">
				  		<div class="bubbleInfo" data-header="Lucy" data-image="recursos/images/personajesBio/lucy.jpg" data-detail="Sin duda la niña más bonita de la escuela. Casi todos los niños están enamorados de ella, abiertamente o en secreto. Su correo electrónico recibe unas cinco declaraciones al día y muchas más los fines de semana. Es también la más popular entre las niñas pues casi todas desean ser su amiga.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/lucy.png"/>
				  		<img class="personaje sombra pCatorce" src="recursos/images/personajes/lucy-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.4">
				  	<div class="conoceloContainerDiezysiete ">
				  		<div class="bubbleInfo" data-header="Benito" data-image="recursos/images/personajesBio/benito.jpg" data-detail="Es sin duda, el más noble de todos los bigotones, su bondad no conoce límite. Tiene alma de niño y corazón de gigante. Nada le importa más que ayudar los otros. Siempre que tengas un problema, Benito seguro te escuchará y dará un consejo que despejará tus dudas.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/benito.png"/>
				  		<img class="personaje sombra pDiezysiete" src="recursos/images/personajes/benito-s.png"/>
				  	</div>
				  </li> 
				  <li class="layer" data-depth="0.42">
				  	<div class="conoceloContainerDiezyseis ">
				  		<div class="bubbleInfo" data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella es tan estudiosa, que a sus ocho años ya piensa en la universidad en la que le gustaría estudiar cuando sea mayor. Por desgracia, el gusto por el estudio no es muy bien visto por sus compañeros quienes constantemente la molestan por ser aplicada.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/nina-lentes.png"/>
				  		<img class="personaje sombra pDiezyseis" src="recursos/images/personajes/nina-lentes-s.png"/>
				  	</div>
				  </li> 
				  <li class="layer" data-depth="0.48">
				  	<div class="conoceloContainerQuince ">
				  		<div class="bubbleInfo" data-header="Marcelino" data-image="recursos/images/personajesBio/marcelino.jpg" data-detail="Sin duda el cerebro del equipo. Marcelino es noble y el mejor amigo, aunque su corazón es débil y enamoradizo. Marcelino es un gran observador, mira todo a detalle y en su cabeza lo clasifica, ordena y selecciona; observa las intenciones de las personas, mira cuando la gente es honesta, cuando está contenta o triste, cuando están alegres pero también cuando no dicen la verdad. Y claro, también sueña con ser invisible.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje " src="recursos/images/personajes/marcelino.png"/>
				  		<img class="personaje sombra pQuince" src="recursos/images/personajes/marcelino-s.png"/>
				  	</div>
				  </li>  
				</ul>
			</div>
		</div>
	</section>

	<section id="seccionGaleriaEstaticaParteDos" class="seccionGaleriaEstaticaParteDos">

	</section>
	<section id="seccionGaleriaEstaticaParteTres" class="seccionGaleriaEstaticaParteTres">

	</section>

	<section id="seccionGaleria" class="seccionGaleria">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 seccionGaleria-container">
				<div id="galeria-container">
					<img id="verGaleria" class="buttonGaleria img-responsive" src="recursos/images/btn-galeria.png"/>
				</div>
				<ul id="rslidesGaleria" class="galeria hidden">
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/1.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/2.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/3.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/4.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/5.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/6.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/7.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/8.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/9.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/10.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/11.jpg"/>
				  </li>
				  <li>
				  	<img class="" src="recursos/images/galeria/slider/12.jpg"/>
				  </li>
				</ul>
			</div>	
		</div>	
	</section>

	<section id="seccionDetras" class="seccionDetras">
		<h1>DETRÁS DE LOS BIGOTES</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="bloqueImagen col-md-8 col-sm-8 marginBlockLeft">
					<img class="img-responsive img100 imgGalUno" src="recursos/images/galeria/1.jpg"/>
				</div>
				<div class="bloqueImagen col-md-4 col-sm-4">
					<img class="img-responsive img100 imgGalDos" src="recursos/images/galeria/2.jpg"/>
					<img class="img-responsive img90 imgGalTres" src="recursos/images/galeria/3.jpg"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="bloqueImagen col-md-5 col-sm-5 marginBlockLeft">
					<img class="img-responsive img90 imgGalCuatro" src="recursos/images/galeria/5.jpg"/>
					<img class="img-responsive img80 imgGalCinco" src="recursos/images/galeria/6.jpg"/>
					<img class="img-responsive img90 imgGalSeis" src="recursos/images/galeria/8.jpg"/>
				</div>
				<div class="bloqueImagen col-md-7 col-sm-7">
					<img class="img-responsive img100 imgGalSiete" src="recursos/images/galeria/4.jpg"/>
					<img class="img-responsive img90 imgGalOcho" src="recursos/images/galeria/7.jpg"/>
				</div>
			</div>
		</div>
		<div id="masDetras" class="botonMasGal">
			<span>CARGAR MÁS</span>
		</div>
	</section>

	<section id="seccionDetrasMore" class="seccionDetrasMore">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="bloqueImagen col-md-5 col-sm-5 marginBlockLeft">
					<img class="img-responsive img90 imgGalNueve" src="recursos/images/galeria/9.jpg"/>
					<img class="img-responsive img80 imgGalDiez" src="recursos/images/galeria/10.jpg"/>
					<img class="img-responsive img90 imgGalOnce" src="recursos/images/galeria/11.jpg"/>
				</div>
				<div class="bloqueImagen col-md-7 col-sm-7">
					<img class="img-responsive img100 imgGalDoce" src="recursos/images/galeria/12.jpg"/>
					<img class="img-responsive img90 imgGalTrece" src="recursos/images/galeria/13.jpg"/>
				</div>
			</div>
		</div>
	</section>

	<section id="seccionPremios" class="seccionPremios">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 premios-container">
				<ul id="rslidesPremios" class="premios">
				<li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>FACIAL HAIR FEST (Main - USA)</h1>
							  		<h4>Premio Chaplin a Mejor Comedia</h4>
							  		<input data-link="https://www.facebook.com/FacialHairFest/photos/ms.c.eJw9yckRACAIBMGMLFk5lvwTk8Lj2TOErxmUUBdqDraDbcNzzkir8K0CVrgmzsf3~_bYBqB4TcQ~-~-.bps.a.826307764128521.1073741879.138221732937131/826307790795185/?type=1&theater" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>IMA (INTERNATIONAL MOVIE AWARDS)</h1>
							  		<h4>Best Film</h4>
							  		<input data-link="http://internationalmovieawards.com/IMA/2014/winners2014.htm" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>BOSTON INTERNATIONAL KIDS FILM FESTIVAL</h1>
							  		<h4>Mejor Fotografía</h4>
							  		<input data-link="http://bikff.org/films/" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>INDIAN CINE FILM FESTIVAL 14</h1>
							  		<h4>Best Cinematography</h4>
							  		<input data-link="http://miniboxoffice.com/indiancinefilmfestival/" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>OVERLOOK (Roma, Italia)</h1>
							  		<h4>Selección Oficial</h4>
							  		<input data-link="http://www.filmfestivals.com/festival/overlook_2014_5th_cinemavvenire_film_festival" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>Festival International de Cine en Hermosillo</h1>
							  		<h4>Premio Del Público a Mejor Largometraje Mexicano</h4>
							  		<input data-link="http://fich.mx/seleccion-oficial-2014/" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>FILM MAKERS OF THE YEAR</h1>
							  		<h4>Newcomer Film of the Year & Best Director</h4>
							  		<input data-link="http://filmmakersoftheyear.com/winners.htm" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>JIFF (INDIA)</h1>
							  		<h4>Selección Oficial</h4>
							  		<input data-link="http://www.jiffindia.org/documents/1st%20List%20of%20Nominated%20films-JIFF%202015.pdf" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>MICA FILM FESTIVAL (BRASIL)</h1>
							  		<h4>Selección Oficial</h4>
							  		<input data-link="http://www.micafilmfestival.com/#!filmes-%C2%AD%E2%80%902014/caix" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>INTERNATIONAL FILM FESTIVAL (Jakarta, Indonesia)</h1>
							  		<h4>Best Film 2014</h4>
							  		<input data-link="http://filmfestivalsalliance.org/winners_list/screening_table/screening_table.htm" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>CINI (FESTIVAL INTERNACIONAL DE CINE PARA NIÑOS) PERU</h1>
							  		<h4>Premio del Público a Mejor Película</h4>
							  		<input data-link="http://centrocultural.britanico.edu.pe/" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>PROVIDENCE CHILDREN'S FILM FESTIVAL</h1>
							  		<h4>Selección Oficial - Premio del Público</h4>
							  		<input data-link="http://providencechildrensfilmfestival.org/films/?wpv_paged_preload_reach" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>SAN DIEGO LATINO FILM FESTIVAL</h1>
							  		<h4>Mejor Película Familiar</h4>
							  		<input data-link="http://providencechildrensfilmfestival.org/films/?wpv_paged_preload_reach" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>IFCOM Festival, Indonesia</h1>
							  		<h4>Premio a mejor Actor</h4>
							  		<input data-link="http://www.internationalfilmcompetition.org/winners.htm" class="botonVerNota" type="button" value="VER NOTA"/>
				  				</td>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  			</tr>
				  		</table>
				  	</div>
				  </li>				  
				</ul>
			</div>
		</div>	
	</section>

	<section id="seccionCreditos" class="seccionCreditos">
		<div class="row creditos-container">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 creditos-container-inner">
				<table class="creditosDesktop">
					<tr>
						<td>
							<p>DIRECTOR: <b>MANUEL CARAMÉS</b></p>
							<p>GUIONISTA: <b>JORGE A. ESTRADA</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>ELENCO: <b>SANTIAGO TORRES (ULISES), JESÚS OCHOA (TÍO FABIÁN), OSVALDO DE LEÓN (NARCISO), EDUARDO ESPAÑA (DAGOBERTO). FERNANDO BECERRIL (DON BACILIO), GABRIELA ARROYO (ALICIA), LENNY ZUNDEL (SABINO), DARÍO RIPOLL (TIMOTEO), JOSÉ MONTINI (AQUILES)</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<table>
								<tr>
									<td>
										<p>PRODUCTORES: <b>MANUEL CARAMÉS, BARNARD STEELE Y GABRIELA ARROYO</b></p>
									</td>
									<td>
										<p><b>GERMÁN GUTIÉRREZ, FERNANDA JUÁREZ, ARMANDO SAID FLORES,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>DIRECTOR DE FOTOGRAFÍA: <b>CHUY CHÁVEZ</b></p>
									</td>
									<td>
										<p><b>MARCO VALDÉS, ARMANDO HERNÁNDEZ, ROBERTO BLANDÓN,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>DISEÑO DE PRODUCCIÓN: <b>LIZ MEDRANO</b></p>
									</td>
									<td>
										<p><b>LUIS FERNANDO PEÑA, JUAN SOLO, LUIS GATICIA,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>DISEÑO DE VESTUARIO: <b>FITO CRUZ</b></p>
									</td>
									<td>
										<p><b>HUGO MACÍAS-MACOTELA, PEDRO DAMÍAN, JAVIER ZARAGOZA,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>MUSICALIZACIÓN: <b>ALEJANDRO GIACOMÁN</b></p>
									</td>
									<td>
										<p><b>CLAUDIA BOLLAT, ARMANDO ARCHUNDIA, PAULO GALINDO,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>CASTING: <b>RODRIGO RUIZ</b></p>
									</td>
									<td>
										<p><b>LAURA DE ITA, RAQUEL PANKOWSKY, LUIS OROZCO,</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>DISEÑO DE MAQUILLAJE: <b>RAUL MUÑOZ</b></p>
									</td>
									<td>
										<p><b>HÉCTOR BERZUNZA, JUAN FRESE.</b></p>
									</td>
								</tr>
								<tr>
									<td>
										<p>EDICIÓN: <b>JORGE "PORRI" GARCÍA</b></p>
									</td>
									<td>
										<p></p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="creditosMobile">
					<tr>
						<td>
							<p>DIRECTOR: <b>MANUEL CARAMÉS</b></p>
						</td>
					</tr>
					<tr>
						<td>		
							<p>GUINISTA: <b>JORGE A. ESTRADA</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>ELENCO: <b>SANTIAGO TORRES,</b></p>
							<p><b>JESÚS OCHOA,</b></p>
							<p><b>OSVALDO DE LEÓN,</b></p>
							<p><b>EDUARDO ESPAÑA,</b></p>
							<p><b>FERNANDO BECERRIL,</b></p>
							<p><b>GABRIELA ARROYO,</b></p>
							<p><b>LENNY ZUNDEL,</b></p>
							<p><b>DARIO RIPOLL,</b></p>
							<p><b>JOSÉ MONTINI</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>PRODUCTORES: <b>MANUEL CARAMÉS Y <wbr> BARNARD STEELE</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>DIRECTOR DE FOTOGRAFÍA:</p>
							<p><b>CHUY CHÁVEZ</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>DISEÑO DE PRODUCCIÓN:</p>
							<p><b>LIZ MEDRANO</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>DISEÑO DE VESTUARIO:</p>
							<p><b>FITO CRUZ</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>MUSICALIZACIÓN:</p>
							<p><b>ALEJANDRO GIACOMÁN</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>CASTING: <b>RODRIGO RUIZ</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>DISEÑO DE MAQUILLAJE:</p>
							<p><b>RAUL MUÑOZ</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>EDICIÓN: <b>JORGE "PORRI" GARCÍA</b></p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</section>

	<footer class="patrocinadores">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 patrocinadores-container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1 col-lg-offset-2">
				<img class="img-responsive white" src="recursos/images/footer/videocine.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/charanga.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/idecine.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/imc.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/conaculta.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/fud.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-1">
				<img class="img-responsive" src="recursos/images/footer/sigma.png"/>
			</div>
			
		</div>
	</footer>

	<!-- Toolbar -->

	<div class="toolbar">

		<div class="toolbar-container">

			<div id="facebookL" class="globo facebookL"></div>
			<div id="twitterL" class="globo twitterL"></div>
			<div id="instagramL" class="globo instagramL"></div>
			<div id="youtubeL" class="globo youtubeL"></div>

		</div>
		<div id="toolbar-container-facebook" class="toolbar-container-facebook">
			<div id="facebook-l" class="globo facebook-l"></div>
			<div id="facebook-s" class="globo facebook-s"></div>
		</div>
		<div id="toolbar-container-twitter" class="toolbar-container-twitter">
			<div id="twitter-l" class="globo twitter-l"></div>
			<div id="twitter-s" class="globo twitter-s"></div>
		</div>

	</div>

	<!-- End Toolbar -->



	<div class="container-fluid fullscreen you2be">
        <div class="col-md-6 col-md-offset-3 logoYoutube"><img class=
        "img-responsive" src="recursos/images/logo-por-mis-bigotes.png"></div>

        <div class="col-md-1 youtubeClose"><img class="cerrarBoton" id=
        "closeYoutubePlayer" src="recursos/images/close.png"></div>

        <div id="youtube" class="col-md-8 col-md-offset-2 youtube">
            <div id="youtubeApiContainer">
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2 youtubeExplorar hidden">
            <div class="explorarSitioBoton" id="irSitioYoutubePlayer">EXPLORAR EL SITIO</div>
        </div>
    </div>


    <div class="container-fluid fullscreen info">
        <div class="col-md-6 col-md-offset-3 infoConocelos"><img class=
        "img-responsive" src="recursos/images/logo-por-mis-bigotes.png"></div>

        <div class="col-md-8 col-md-offset-2 infoDetalle">

        	<h1>Nombre Artista</h1>
        	<img class="img-responsive" src="recursos/images/personajesBio/alicia.jpg"/>
        	<p>Descripción</p>
            
        </div>

        <div class="col-md-8 col-md-offset-2 regresarConocelos">
            <div class="cerrarInfoBoton" id="cerrarInfoConocelos">Regresar</div>
        </div>
    </div>

	<!-- Carga de Google Analytics -->

	<!-- End Google Analytics -->



	<!-- Carga de archivos Js -->
		<script src="./recursos/js/bootstrap.min.js"></script>
		<script src="./recursos/js/responsiveslides.min.js"></script>
		<script src="./recursos/js/jquery.parallax.min.js"></script>
    	<script type="text/javascript">var deviceWhat = <?php echo $boolDetect; ?></script>
		<script src="./recursos/js/main.min.js"></script>
		<script type="text/javascript" src="./recursos/js/swfobject.js"></script>
	<!-- End archivos Js -->

	</body>
</html> 