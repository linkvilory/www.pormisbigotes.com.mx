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

	$("#sceneConocelos").parallax({
		calibrateX: false,
  calibrateY: false,
  invertX: true,
  invertY: true,
  limitX: false,
  limitY: false,
  scalarX: 40,
  scalarY: 0,
  frictionX: 1,
  frictionY: 1,
  originX: 0.5,
  originY: 0.5
	});
		


	$(".pUno").hover(function() {
		$(this).css( "opacity", "0" );
		$(this).prev().prev().css("display", "block");
		}, function() {
		$(this).css( "opacity", "0.5" );
		$(this).prev().prev().css("display", "none");
	});

});