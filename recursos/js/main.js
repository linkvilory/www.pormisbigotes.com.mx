$(function(){

	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").hide();
	});

	$("#showYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").show();
	})

	/*
	 * Toogle Menu
	 */

	 $("#toogleMenu").click(function(){
	 	$("#menu").toggleClass("hide");
	 });

	/*
	 * Ajax Formulario
	 */
	$("#enviarFormulario").submit(function(e){
		e.preventDefault();

		/*
		 * Obtener todos los valores del formulario
		 */

		var respuestaUno = "";
		var respuestaDos = "";
		var respuestaTres = "";

		$( ".grupoUno" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaUno = obj.val();
			}
		});

		$( ".grupoDos" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaDos = obj.val();
			}
		});

		$( ".grupoTres" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaTres = obj.val();
			}
		});

		if(respuestaUno == "" || respuestaDos == "" || respuestaTres == ""){
			alert("Debe de seleccionar la respuesta a las preguntas.");
			return;
		}

		$.ajax({
			type: "POST",
			url: "send.php",
			data: { 
				respuestaUno: respuestaUno,
				respuestaDos: respuestaDos,
				respuestaTres: respuestaTres
			}
		})
		.done(function( msg ) {
			alert( "Gracias por sus comentarios!");
			window.location = "./inicio.html";
		});
	});
	

	/*
	 * Seleccionar solo el boton del grupo seleccionado y deseleccionar los demas
	 */

	 $(".grupoUno").click(function(){

	 	$( ".grupoUno" ).each(function( index ) {
			$(this).removeClass("selected");
		});

	 	$(this).toggleClass("selected");

	 });

	 $(".grupoDos").click(function(){

	 	$( ".grupoDos" ).each(function( index ) {
			$(this).removeClass("selected");
		});

	 	$(this).toggleClass("selected");

	 });

	 $(".grupoTres").click(function(){

	 	$( ".grupoTres" ).each(function( index ) {
			$(this).removeClass("selected");
		});

	 	$(this).toggleClass("selected");

	 });

	 /*
	  * Rslide Section
	  */
	  $("#rslidesPremios").responsiveSlides({
		  auto: false,             // Boolean: Animate automatically, true or false
		  speed: 100,            // Integer: Speed of the transition, in milliseconds
		  timeout: 2000,          // Integer: Time between slide transitions, in milliseconds
		  pager: true,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: true,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "premios",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
	$("#verGaleria").click(function(){

		$("#galeria-container").hide();

		$("#rslidesGaleria").responsiveSlides({
		  auto: false,             // Boolean: Animate automatically, true or false
		  speed: 100,            // Integer: Speed of the transition, in milliseconds
		  timeout: 2000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: true,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: true,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "galeria",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
		
		$("#rslidesGaleria").removeClass("hidden");
	});


	$("#masDetras").click(function(){
		$("#masDetras").hide();
		$("#seccionDetrasMore").show();
	});

	$("#masConocelos").click(function(){
		$("#masConocelos").hide();
		$("#seccionConocelosMore").show();
	});
		
});