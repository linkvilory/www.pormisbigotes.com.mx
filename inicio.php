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
			<link type="text/css" rel="stylesheet" href="./recursos/css/view.inicio.html.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/view.inicio.html.mediaquery.768Up.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/view.inicio.html.mediaquery.992Up.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/view.inicio.html.mediaquery.1200Up.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/bootstrap.css"/>
			<link type="text/css" rel="stylesheet" href="./recursos/css/responsiveslides.css"/>
		<!-- End archivos Css-->

		<!-- Carga de archivos Js -->
			<script src="./recursos/js/jquery-1.11.2.min.js"></script>
		<!-- End archivos js -->

	</head>
	<body>

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
		<span>MENU</span>
	</div>

	<nav id="menu" class="menu">
		<div class="menu-container">
			<ul>
				<li class="enlace trailer">
					<a id="showYoutubePlayer"><span>Ver Trailer</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionSinopsis"><span>Sinopsis</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionConocelos"><span>Personajes</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionGaleria"><span>Galeria</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionPremios"><span>Prensa</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionPremios"><span>Dercargas</span></a>
				</li>
				<li class="enlace">
					<a href="#seccionCreditos"><span>Ficha Tecnica</span></a>
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
			<h1>BIENVENIDO AL CLUB DE LOS BIGOTES</h1>
		</div>
	</section>

	<section id="seccionNoticias" class="seccionNoticias">
		<div class="cortina"></div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 noticias-container">
			<h1>ÚLTIMAS NOTICIAS</h1>

			<div class="noticiasDesktop">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fporbigotes&amp;width=100&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:395px;" allowTransparency="true"></iframe>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
					<a class="twitter-timeline"  href="https://twitter.com/PorBigotes" data-widget-id="570979363395739648">Tweets por el @PorBigotes.</a>
    				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<blockquote class="instagram-media" data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://instagram.com/p/wNGRlRiqME/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_top">Una foto publicada por Belisario Luna (@belisarioluna_)</a> el <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2014-12-05T00:18:54+00:00">4 de Dic de 2014 a la(s) 4:18 PST</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
				</div>
			</div>
			
		</div>
	</section>

	<section id="seccionSinopsis" class="seccionSinopsis">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 sinopsis-container">
			<h1>SINOPSIS</h1>
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
						<img data-header="Lula" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Usa lentes, es muy alegre y dibuja todo el tiempo. Colecciona mil cosas pero lo que la hace especial es su obsesión con la suerte. Todo lo que gira en torno a la suerte despierta en ella una enorme curiosidad ¿Qué determina la buena o la mala suerte? ¿Se trata de algo que hacemos o es una fuerza invisible que nos mueve como a un globo que soltamos al viento? se pregunta Lula mientras sueña con inventar una superstición. Y claro, también desearía ser invisible." class="imageInfo personaje" src="recursos/images/personajes/mobile/lula.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Tío Fabían" data-image="recursos/images/personajesBio/tio-fabian.jpg" data-detail="Un personaje alegre de carácter extrovertido. Con su mirada peculiar y su poder de convencimiento es capaz de conmover al más reacio. A pesar de esto, es un tanto solitario y suele alejarse por largos periodos de tiempo. Amante de los autos antiguos tiene una colección de miles de carritos de juguete." class="imageInfo personaje" src="recursos/images/personajes/mobile/tio-fabian.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende perfumes en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura." class="imageInfo personaje" src="recursos/images/personajes/mobile/alicia.png"/>
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
						<img data-header="Niño Uno" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-1.png"/>
					</div>
					<div class="col-xs-6 col-sm-6">
						<img data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella tan estudiosa, que a veces ya piensa en la universidad en la que le gustaría estudiar de grande, y eso que apenas tiene ocho años. Por desgracia, ese gusto hacia el estudio no es muy bien visto entre sus compañeros que constantemente la molestan por aplicada." class="imageInfo personaje" src="recursos/images/personajes/mobile/nina-lentes.png"/>
					</div>
					
					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-6 col-sm-6">
						<img data-header="Niño Dos" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-2.png"/>
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
						<img data-header="Lula" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Usa lentes, es muy alegre y dibuja todo el tiempo. Colecciona mil cosas pero lo que la hace especial es su obsesión con la suerte. Todo lo que gira en torno a la suerte despierta en ella una enorme curiosidad ¿Qué determina la buena o la mala suerte? ¿Se trata de algo que hacemos o es una fuerza invisible que nos mueve como a un globo que soltamos al viento? se pregunta Lula mientras sueña con inventar una superstición. Y claro, también desearía ser invisible." class="imageInfo personaje" src="recursos/images/personajes/mobile/lula.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>

					<div class="col-xs-4 col-sm-4">
						<img data-header="Tío Fabían" data-image="recursos/images/personajesBio/tio-fabian.jpg" data-detail="Un personaje alegre de carácter extrovertido. Con su mirada peculiar y su poder de convencimiento es capaz de conmover al más reacio. A pesar de esto, es un tanto solitario y suele alejarse por largos periodos de tiempo. Amante de los autos antiguos tiene una colección de miles de carritos de juguete." class="imageInfo personaje" src="recursos/images/personajes/mobile/tio-fabian.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende perfumes en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura." class="imageInfo personaje" src="recursos/images/personajes/mobile/alicia.png"/>
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
						<img data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella tan estudiosa, que a veces ya piensa en la universidad en la que le gustaría estudiar de grande, y eso que apenas tiene ocho años. Por desgracia, ese gusto hacia el estudio no es muy bien visto entre sus compañeros que constantemente la molestan por aplicada." class="imageInfo personaje" src="recursos/images/personajes/mobile/nina-lentes.png"/>
					</div>

					<div class="col-xs-12 col-sm-12 separador"></div>
					
					<div class="col-xs-4 col-sm-4">
						<img data-header="Niño Uno" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-1.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
						<img data-header="Niño Dos" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro." class="imageInfo personaje" src="recursos/images/personajes/mobile/nino-2.png"/>
					</div>
					<div class="col-xs-4 col-sm-4">
					</div>

				</div>
				<ul id="sceneConocelos" class="sceneConocelos">
				<!-- Primera Fila -->
				  <li class="layer" data-depth="0.10">
				  	<div class="conoceloContainerUno ">
				  		<div class="bubbleInfo" data-header="Niño Uno" data-image="recursos/images/personajesBio/nino-1.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro.">+</div>
				  		<div class="pEncabezado"></div>
				  		<img class="personaje" src="recursos/images/personajes/nino-fut.png"/>
				  		<img class="personaje sombra pUno" src="recursos/images/personajes/nino-fut-s.png"/>
				  	</div>
				  </li>
				  <li class="layer" data-depth="0.10">
				  	<div class="conoceloContainerDos ">
				  		<div class="bubbleInfo" data-header="Niño Dos" data-image="recursos/images/personajesBio/nino-2.jpg" data-detail="Liderados por uno de los bullys más crueles que la escuela recuerde, la pandilla de niños malos recorre los pasillos de la escuela imponiendo su ley implacable y sembrando miedo entre los estudiantes más pequeños. Su sola presencia aterroriza alumnos y a uno que otro maestro.">+</div>
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
				  		<div class="bubbleInfo" data-header="Alicia" data-image="recursos/images/personajesBio/alicia.jpg" data-detail="Es la mamá de Ulises, una mujer muy guapa pero bastante despistada que siempre tiene la cabeza en otra parte. Vende perfumes en una tienda departamental y tiene un don especial para envolver regalos, sus habilidades suelen sorprender a los clientes que en muchas ocasiones ni siquiera abren los regalos por no destruir la envoltura.">+</div>
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
				  		<div class="bubbleInfo" data-header="Lula" data-image="recursos/images/personajesBio/lula.jpg" data-detail="Usa lentes, es muy alegre y dibuja todo el tiempo. Colecciona mil cosas pero lo que la hace especial es su obsesión con la suerte. Todo lo que gira en torno a la suerte despierta en ella una enorme curiosidad ¿Qué determina la buena o la mala suerte? ¿Se trata de algo que hacemos o es una fuerza invisible que nos mueve como a un globo que soltamos al viento? se pregunta Lula mientras sueña con inventar una superstición. Y claro, también desearía ser invisible.">+</div>
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
				  		<div class="bubbleInfo" data-header="Niña de lentes" data-image="recursos/images/personajesBio/nina-lentes.jpg" data-detail="Ella tan estudiosa, que a veces ya piensa en la universidad en la que le gustaría estudiar de grande, y eso que apenas tiene ocho años. Por desgracia, ese gusto hacia el estudio no es muy bien visto entre sus compañeros que constantemente la molestan por aplicada.">+</div>
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
		<div id="masConocelos" class="botonMas">
			<span>CARGAR MÁS</span>
		</div>
	</section>
	<section id="seccionConocelosMore" class="seccionConocelosMore">
		
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
				  <li>
				  	<div>
				  		<table>
				  			<tr>
				  				<td class="campana-container">
				  					<div class="campana">
				  					</div>
				  				</td>
				  				<td>
				  					<h1>International Movie Awards</h1>
							  		<h4>Best film</h4>
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
				  					<h1>Boston International Kids Film Festival</h1>
							  		<h4>Best International</h4>
							  		<input data-link="http://bikff.org" class="botonVerNota" type="button" value="VER NOTA"/>
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
				<input class="botonDescargarKit" type="button" value="DESCARGAR KIT DE PRENSA"/>
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
							<p>GUINISTA: <b>JORGE A. ESTRADA</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>ELENCO: <b>SANTIAGO TORRES, JESÚS OCHOA, OSVALDO DE LEÓN, EDUARDO ESPAÑA. FERNANDO BECERRIL, GABRIELA ARROYO, LENNY ZUNDEL, DARIO RIPOLL, JOSÉ MONTINI</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<table>
								<tr>
									<td>
										<p>PRODUCTORES: <b>MANUEL CARAMÉS Y BARNARD STEELE</b></p>
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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 patrocinadores-container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/idecine.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/imc.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/conaculta.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/fud.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/sigma.png"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
				<img class="img-responsive" src="recursos/images/footer/charanga.png"/>
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
        	<p>Descripcion</p>
            
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
		<script src="./recursos/js/main.js"></script>
		<script src="./recursos/js/jquery.html5Loader.min.js"></script>
		<script type="text/javascript" src="./recursos/js/swfobject.js"></script>

		<script type="text/javascript">
    
		    $.html5Loader({
		        filesToLoad: 'recursos/files.json', // this could be a JSON or simply a javascript object
		        onBeforeLoad: function () {},
		        onComplete: function () {
		            console.log('fin');
		            $('#preloader').hide();
		        },
		        onElementLoaded: function ( obj, elm) { },
		        onUpdate: function ( percentage ) {
		        	console.log("Porcentaje: " + percentage);
		            var nuevo = percentage-100;
		            console.log("Left: " + nuevo);
		            $('#preloader').find('.cargando').find('div').animate({'left':nuevo + '%'});
		        }
		    });

    	</script>
	<!-- End archivos Js -->

	</body>
</html> 