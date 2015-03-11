$(function(){

	$("#facebookL").click(function(){
		$("#toolbar-container-facebook").toggleClass("show");
		$("#toolbar-container-twitter").removeClass("show");
	});
	$("#twitterL").click(function(){
		$("#toolbar-container-twitter").toggleClass("show");
		$("#toolbar-container-facebook").removeClass("show");
	});
	$("#instagramL").click(function(){
		$("#toolbar-container-twitter").removeClass("show");
		$("#toolbar-container-facebook").removeClass("show");
	});
	$("#youtubeL").click(function(){
		$("#toolbar-container-twitter").removeClass("show");
		$("#toolbar-container-facebook").removeClass("show");
	});

	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen.you2be").hide();
		$("#myyoutubeplayer").get(0).stopVideo();
	});
	$("#showYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen.you2be").show();
		var params = { allowScriptAccess: "always" };
	    var atts = { id: "myyoutubeplayer" };
	    swfobject.embedSWF("http://www.youtube.com/v/F-th5y59AH8?enablejsapi=1&playerapiid=ytplayer&version=3",
	                       "youtubeApiContainer", "100%", "100%", "8", null, null, params, atts);
	});


	/*
	 * Toogle Menu
	 */


	 $("#toogleMenu").click(function(){

	 	var leftMenu = $('#menu').css("left");
	 	if(leftMenu == "0px"){
	 		$('#menu').animate({
		         left: "-50%",
		    }, 900, function () {
		        //window.location.hash = target;
		    });
	 	}else{
	 		$('#menu').animate({
		         left: "0",
		    }, 900, function () {
		        //window.location.hash = target;
		    });
	 	}
	 	
	 });

	 /*
	  * Rslide Section
	  */
	  $("#rslidesPremios").responsiveSlides({
		  auto: false,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
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
		$("#seccionGaleria").css("max-height","100px");
		$("#galeria-container").hide();

		$("#rslidesGaleria").responsiveSlides({
		  auto: false,             // Boolean: Animate automatically, true or false
		  speed: 200,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
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
		calibrateX: true,
  calibrateY: false,
  invertX: true,
  invertY: true,
  limitX: false,
  limitY: false,
  scalarX: 0,
  scalarY: 0,
  frictionX: 0,
  frictionY: 0,
  originX: 0.5,
  originY: 0.5
	});
		


	$(".bubbleInfo").hover(function() {
		$(this).next().next().next().css( "opacity", "0" );
		$(this).next().css("display", "block");
		}, function() {
		$(this).next().next().next().css( "opacity", "0.5" );
		$(this).next().css("display", "none");
	});

	$(".bubbleInfo").click(function(){
		$(".container-fluid.fullscreen.info .infoDetalle h1").html($(this).attr("data-header"));
		$(".container-fluid.fullscreen.info .infoDetalle img").attr("src", $(this).attr("data-image"));
		$(".container-fluid.fullscreen.info .infoDetalle p").html($(this).attr("data-detail"));
		$(".container-fluid.fullscreen.info").show();
	});
	$(".imageInfo").click(function(){
		$(".container-fluid.fullscreen.info .infoDetalle h1").html($(this).attr("data-header"));
		$(".container-fluid.fullscreen.info .infoDetalle img").attr("src", $(this).attr("data-image"));
		$(".container-fluid.fullscreen.info .infoDetalle p").html($(this).attr("data-detail"));
		$(".container-fluid.fullscreen.info").show();
	});
	$("#cerrarInfoConocelos").click(function(){
		$(".container-fluid.fullscreen.info").hide();
	});


	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        //window.location.hash = target;
	    });
	});

	$(".botonVerNota").click(function(){
		var url = $(this).attr("data-link");
		var win = window.open(url, '_blank');
  		win.focus();
	});

});

function onYouTubePlayerReady(playerId) {
	$("#myyoutubeplayer").get(0).playVideo();
}