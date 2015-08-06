$(function(){

	$("#irSitioYoutubePlayer").click(function (){
		window.location = "./encuesta.html";
	});
	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").hide();
		$("#myyoutubeplayer").get(0).stopVideo();
		$("#youtubeApiContainer").html("");
	});

	if(deviceWhat == 1){
		$("#showYoutubePlayer video").hide(); 
		$(".containerDefault .trailer").css({
			"background": "",
			"background-image": "url(recursos/video/bigotes.gif)",
			"background-size": "cover",
			"opacity": "1"
		}); 
		$(".containerDefault .explorar").css({
			"background": "",
			"background-image": "url(recursos/css/images/bg/verde.jpg)",
			"background-size": "cover",
			"opacity": "1"
		});
		$("#showYoutubePlayer").click(function (){
			$(".container-fluid.fullscreen").show();
			$("#youtubeApiContainer").html("<iframe width='48%' height='60%' src='//www.youtube.com/embed/6JaiJBvINqA?rel=0' frameborder='0' allowfullscreen />");
			$("#youtubeApiContainerTwo").html("<iframe width='48%' height='60%' src='//www.youtube.com/embed/fG4xR8AvfXo?rel=0' frameborder='0' allowfullscreen />");
		});
	}else{

		/*
		 * Init segun dispositivo
		 */
		$("#showYoutubePlayer video").hide(); 
		$(".containerDefault .trailer").css({
			"background": "",
			"background-image": "url(recursos/css/images/bg/trailer.jpg)",
			"background-size": "cover",
			"opacity": "0.5"
		}); 
		$(".containerDefault .explorar").css({
			"background": "",
			"background-image": "url(recursos/css/images/bg/verde.jpg)",
			"background-size": "auto",
			"opacity": "0.5"
		});
		$("#showYoutubePlayer").click(function (){
			$(".container-fluid.fullscreen").show();
			var params = { allowScriptAccess: "always" };
		    var atts = { id: "myyoutubeplayer" };
		    swfobject.embedSWF("http://www.youtube.com/v/6JaiJBvINqA?enablejsapi=1&playerapiid=ytplayer&version=3",
		                       "youtubeApiContainer", "48%", "60%", "8", null, null, params, atts);
		    swfobject.embedSWF("http://www.youtube.com/v/fG4xR8AvfXo?enablejsapi=1&playerapiid=ytplayer&version=3",
		                       "youtubeApiContainerTwo", "48%", "60%", "8", null, null, params, atts);
		});
		 /* End Init segun dispositivo */
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

    	$(".containerDefault .explorar").hover(function (){
		$(".containerDefault .explorar").css({
			"opacity": "1"
		});
		}, function(){
			$(".containerDefault .explorar").css({
				"opacity": "0.5"
			});
		});

	}
	
	$("#explorar").click(function(){
		window.location = "./encuesta.html";
	});

});

function onYouTubePlayerReady(playerId) {
	$("#myyoutubeplayer").get(0).playVideo();
}