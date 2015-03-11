$(function(){

	$("#irSitioYoutubePlayer").click(function (){
		window.location = "./encuesta.html";
	});
	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").hide();
		$("#myyoutubeplayer").get(0).stopVideo();
		
	});
	$("#showYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").show();
		var params = { allowScriptAccess: "always" };
	    var atts = { id: "myyoutubeplayer" };
	    swfobject.embedSWF("http://www.youtube.com/v/F-th5y59AH8?enablejsapi=1&playerapiid=ytplayer&version=3",
	                       "youtubeApiContainer", "100%", "90%", "8", null, null, params, atts);
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

function onYouTubePlayerReady(playerId) {
	$("#myyoutubeplayer").get(0).playVideo();
}