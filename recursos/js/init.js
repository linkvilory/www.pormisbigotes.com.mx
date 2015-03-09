$(function(){

	$("#irSitioYoutubePlayer").click(function (){
		window.location = "./encuesta.html";
	});
	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").hide();
	});
	$("#showYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").show();
	});
	$("#showYoutubePlayer").hover(function (){
		$("#showYoutubePlayer video").show();
		$("#showYoutubePlayer video").get(0).play();
		$(".containerDefault .trailer").css({
			"background": "#000",
			"opacity": "1"
		});

	}, function(){
		$("#showYoutubePlayer video").hide();
		$('#showYoutubePlayer video').get(0).pause();
		$(".containerDefault .trailer").css({
			"background": "",
			"background-image": "url(recursos/css/images/bg/trailer.jpg)",
			"background-size": "cover",
			"opacity": "0.5"
		});
	});
	$("#explorar").click(function(){
		window.location = "./encuesta.html";
	});

});